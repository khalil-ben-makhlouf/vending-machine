<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Revenue;

class RevenueController extends Controller
{
    public function updateRevenue(Request $request)
    {
        $request->validate([
            'product_price' => 'required|numeric', 
        ]);

        $productPrice = $request->input('product_price');

        $user = auth()->user();

        $revenue = $user->revenue;

        if (!$revenue) {
            $revenue = new Revenue();
            $revenue->user_id = $user->id;
            $revenue->amount = 0; 
            $revenue->save();
        }

        $revenue->amount += $productPrice;
        $revenue->save();

        return response()->json(['message' => 'Total revenue updated successfully']);
    }
}
