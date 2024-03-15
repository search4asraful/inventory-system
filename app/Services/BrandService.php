<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandService
{
    public function BrandStoreService($request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images/brand/', $imageName);

        Brand::create([
            'name' => $request->name,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
        ]);
    }

    public function BrandUpdateService($brand, $request)
    {
        if($request->hasFile('image')){
            if(file_exists(public_path('images/brand/'.$brand->image))){
                unlink(public_path('images/brand/'.$brand->image));
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('images/brand/',$imageName);
            $brand->image = $imageName;
        }

        $brand->name = $request->name;
        $brand->slug = Str::slug($request->name);

        $brand->update();
    }
}