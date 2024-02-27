<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandStoreRequest;
use App\Http\Requests\BrandUpdateRequest;
use App\Models\Brand;
use App\Services\BrandService;

class BrandController extends Controller
{
    public function showBrands()
    {
        $brands = Brand::all();
        return view('backend.brand.manage', compact('brands'));
    }
    
    public function brandAddForm()
    {
        return view('backend.brand.create');
    }

    public function brandStore(BrandStoreRequest $request, BrandService $services)
    {
        $services->BrandStoreService($request);

        $this->setMessage('success', 'New brand has been added.');
        return redirect()->back();
    }

    public function showBrandEdit()
    {
        $brand = Brand::first();
        return view('backend.brand.edit', compact('brand'));
    }
    
    public function brandUpdate(BrandUpdateRequest $request, BrandService $services, $id)
    {
        $services->BrandUpdateService($request, $id);

        $this->setMessage('info', 'brand has been updated.');
        return redirect()->back();
    }

    public function brandDestroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        
        $this->setMessage('warning', 'A brand has been Deleted.');
        return redirect()->back();
    }
}
