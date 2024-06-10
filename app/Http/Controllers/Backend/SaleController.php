<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class SaleController extends Controller
{
    public function productSales()
    {
        if(request()->search){
            $search = request()->search;
            $products = Product::where('name', 'like', "%$search%")->get();
            return view('backend.sale.index',
            [
                'products' => $products
            ]);
        }else{
            return view('backend.sale.index',
            [
                'products' => Product::all()
            ]);
        }
    }
}
