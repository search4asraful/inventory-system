<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    public function showProductList()
    {
        $products = Product::all();
        return view('backend.product.manage', compact('products'));
    }

    public function showProductForm()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.product.create', [
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    public function productStore(ProductStoreRequest $request, ProductService $services)
    {
        $services->productStoreService($request);
        $this->setMessage('success', 'Product has been added');
        return redirect()->back();
    }
    
    public function productEdit($id)
    {
        $product = Product::where('id', $id)->first();
        return view('backend.product.edit', compact('product'));
    }
    
    public function productUpdate(ProductUpdateRequest $request, $id, ProductService $services)
    {
        $product = Product::findOrFail($id);
        $services->productUpdateService($product ,$request);
        $this->setMessage('info', 'Product has been updated');
        return redirect()->back();
    }

    public function productDestroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        $this->setMessage('warning', 'Product has been deleted');
        return redirect()->back();
    }
}
