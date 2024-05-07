<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {    $user = Auth::user();
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
            $imagePath=$request->file('image')->store('images','public');
           // dd($imagePath);

            $data['image']=$imagePath;
        }
        
        $newProduct = Product::create($data);
        return redirect(route('product.index'))->with('success', 'Product created successfully!');
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){
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
            $destination='images_products'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $imagePath=$request->file('image')->store('images','public');
            dd($imagePath);
            $data['image']=$imagePath;
            Storage::disk('public')->delete($product->image);
        }

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');

    }

    public function destroy(Product $product,Request $request)
    {   
        Storage::disk('public')->delete($product->image);
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted Succesffully');
    }

    
    public function show()
    {
        $user = Auth::user();
        $products = $user->products;
        return response()->json($products);
    }
}
