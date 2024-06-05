<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Notification;
use App\Notifications\LowStockAlert;

class ProductController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $products = $user->products;
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'category' => 'required',
            'description' => 'nullable',
            'image' => 'required|image|mimes:png|max:2048',
        ]);
        $data['user_id'] = Auth::id();

        if ($request->has('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
        }

        $newProduct = Product::create($data);
        return redirect(route('product.index'))->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'category' => 'required',
            'description' => 'nullable',
            'image' => 'image|mimes:png|max:2048',
        ]);
        $data['user_id'] = Auth::id();

        if ($request->has('image')) {
            $destination = 'images_products' . $product->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $data['image'] = $imagePath;
            Storage::disk('public')->delete($product->image);
        }

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Successfully');
    }

    public function destroy(Product $product, Request $request)
    {
        Storage::disk('public')->delete($product->image);
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted Successfully');
    }

    public function show()
    {
        $user = Auth::user();
        $products = $user->products;
        return response()->json($products);
    }

    public function updateQuantity($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        if ($product->qty > 0) {
            $product->qty -= 1;
            $product->save();

            return response()->json(['success' => 'Product quantity updated', 'new_quantity' => $product->qty], 200);
        } else {
            return response()->json(['error' => 'Insufficient quantity'], 400);
        }
    }

    public function sellProduct(Request $request, $id)
{
    $data = $request->validate([
        'quantity' => 'required|integer|min:1',
        'payment_method' => 'nullable|string',
    ]);

    $product = Product::findOrFail($id);

    if ($product->qty < $data['quantity']) {
        return response()->json(['error' => 'Insufficient quantity'], 400);
    }
    
    if ($product->qty == 2) {
        Notification::send(Auth::user(), new LowStockAlert($product));
    }

    $totalPrice = $data['quantity'] * $product->price;

    $product->qty -= $data['quantity'];
    $product->save();

    Sale::create([
        'product_id' => $product->id,
        'user_id' => Auth::id(),
        'quantity' => $data['quantity'],
        'price_per_unit' => $product->price,
        'total_price' => $totalPrice,
        'sale_date' => now(),
        'category' => $product->category,
        'payment_method' => $data['payment_method'],
    ]);

    return response()->json(['success' => 'Product sold successfully', 'new_quantity' => $product->qty], 200);
}
}
