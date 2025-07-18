<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function index(){
        $my_products = Product::where('creator_id', Auth::id())->get();
        $my_revenue = ProductOrder::where('creator_id', Auth::id())
            ->where('is_paid', true)
            ->sum('total_price');
        $total_order_success = ProductOrder::where('creator_id', Auth::id())
            ->where('is_paid', true)
            ->get();

        return view('admin.dashboard', [
            'my_products' => $my_products,
            'my_revenue' => $my_revenue,
            'total_order_success' => $total_order_success,
        ]);
    }
}
