<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Str;

class ProductService
{
    public function productStoreService($request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();  
            $image->move('images/product/', $imageName);
        }

        Product::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'image' => $imageName,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'buy_price' => $request->buy_price,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'qty' => $request->qty,
            'sku' => Str::upper($request->sku),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);
    }
    
    public function productUpdateService($product, $request)
    {
        if($request->hasFile('image')){
            if(file_exists(public_path('images/product/'.$product->image))){
                unlink(public_path('images/product/'.$product->image));
            }else{
                $image = $request->file('image');
                $imageName = time().'.'.$image->extension();  
                $image->move('images/product/', $imageName);
                $data['image'] = $imageName;
            }
            $product->image = $imageName;
        }
        
        $product->update([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'buy_price' => $request->buy_price,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'qty' => $request->qty,
            'sku' => Str::upper($request->sku),
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);

        return $product;
    }
}