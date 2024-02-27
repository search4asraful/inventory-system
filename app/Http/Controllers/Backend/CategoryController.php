<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function showCategories()
    {
        $categories = Category::all();
        return view('backend.category.manage', compact('categories'));
    }
    
    public function categoryAddForm()
    {
        return view('backend.category.create');
    }

    public function categoryStore(CategoryStoreRequest $request, CategoryService $services)
    {
        $services->categoryStoreService($request);
        
        $this->setMessage('success', 'New category has been added.');
        return redirect()->back();
    }
    
    public function showCategoryEdit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }
    
    public function categoryUpdate(CategoryUpdateRequest $request, CategoryService $services, $id)
    {
        $services->categoryStoreService($request, $id);

        $this->setMessage('info', 'category has been updated.');
        return redirect()->back();
    }

    public function categoryDestroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        
        $this->setMessage('warning', 'A category has been Deleted.');
        return redirect()->back();
    }
}
