<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sale;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Retrieve data specific to the authenticated user
        $revenueData = $this->getRevenueData($user);
        $quantitySoldData = $this->getQuantitySoldData($user);
        $mostSoldProducts = $this->getMostSoldProducts($user);
        $mostSoldCategories = $this->getMostSoldCategories($user);

        return view('dashboard', compact('revenueData', 'quantitySoldData', 'mostSoldProducts', 'mostSoldCategories'));
    }

    private function getRevenueData($user)
    {
        return $user->sales()->selectRaw('DATE(sale_date) as date, SUM(total_price) as revenue')
            ->groupBy('date')
            ->get();
    }

    private function getQuantitySoldData($user)
    {
        return $user->sales()->selectRaw('DATE(sale_date) as date, SUM(quantity) as quantity_sold')
            ->groupBy('date')
            ->get();
    }

    private function getMostSoldProducts($user)
    {
        return $user->products()
                    ->selectRaw('products.name as product, SUM(sales.quantity) as total_sold')
                    ->join('sales', 'products.id', '=', 'sales.product_id')
                    ->groupBy('products.name')
                    ->orderBy('total_sold', 'desc')
                    ->get();
    }

    private function getMostSoldCategories($user)
    {
        return $user->products()
                    ->selectRaw('products.category as category, SUM(sales.quantity) as total_sales')
                    ->join('sales', 'products.id', '=', 'sales.product_id')
                    ->groupBy('products.category')
                    ->orderBy('total_sales', 'desc')
                    ->get();
    }
}
