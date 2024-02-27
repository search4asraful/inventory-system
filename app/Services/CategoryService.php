<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;

class CategoryService
{
    public function categoryStoreService($request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move('images/category/', $imageName);

        Category::create([
            'name' => $request->name,
            'image' => $imageName,
            'slug' => Str::slug($request->name),
        ]);
    }
    public function categoryUpdateService($request, $id)
    {
        $category = Category::find($id);

        if($request->hasFile('image')){
            if(file_exists(public_path('images/category/'.$category->image))){
                unlink(public_path('images/category/'.$category->image));
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->move('images/category/',$imageName);
            $category->image = $imageName;
        }

        $category->name = $request->name;

        $category->save();
    }
}