@extends('backend.master')
@section('content')
    <main class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Product add</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item">product</li>
                                    <li class="breadcrumb-item active">Edit</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            @if ($errors->any())
                                <div class="alert alert-danger m-2">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="mb-3 text-center">
                                    <img src="{{ asset('/images/product/'.$product->image) }}" style="width: auto; height: 100%; max-height: 200px; object-fit: cover" alt="Product previous image">
                                </div>
                                <form class="custom-validation" action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="mb-3">
                                        <label for="image">Upload a new image</label>
                                        <input type="file" id="image" name="image" value="{{ old('image') }}" class="form-control" accept="image/png, image/jpg, image/jpeg, image/webp"/>
                                    </div>

                                    <div class="mb-3">
                                        <label for="cat_id">Product category <span class="text-danger">*</span></label>
                                        <select class="form-control" name="category_id" id="cat_id">
                                            <option selected value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="brand_id">Product brand <span class="text-danger">*</span></label>
                                        <select class="form-control" name="brand_id" id="brand_id">
                                            <option selected value="{{ $product->brand->id }}">{{ $product->brand->name }}</option>
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="name">Product name <span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" value="{{ $product->name ?? old('name') }}" class="form-control" required placeholder="Enter product name ..."/>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="price">Sell price <span class="text-danger">*</span></label>
                                        <input type="text" id="price" name="price" value="{{ $product->price ?? old('price') }}" class="form-control" required placeholder="Enter product price ..."/>
                                    </div>

                                    <div class="mb-3">
                                        <label for="buyPrice">Buy price <span class="text-danger">*</span></label>
                                        <input type="text" id="buyPrice" name="buy_price" value="{{ $product->buy_price ?? old('buy_price') }}" class="form-control" required placeholder="Enter product buy price ..."/>
                                    </div>

                                    <div class="mb-3">
                                        <label for="discountPrice">Discount price</label>
                                        <input type="text" id="discountPrice" name="discount_price" value="{{ $product->discount_price ?? old('discount_price') }}" class="form-control" required placeholder="Enter product discount Price ..."/>
                                    </div>

                                    <div class="mb-3">
                                        <label for="qty">QTY <span class="text-danger">*</span></label>
                                        <input type="number" id="qty" name="qty" value="{{ $product->qty ?? old('qty') }}" class="form-control" required placeholder="Enter product qty ..."/>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="sku">SKU <span class="text-danger">*</span></label>
                                        <input type="text" id="sku" name="sku" data-parsley-pattern="^(?:[A-Za-z0-9]+-)[A-Za-z0-9]{4,}$" value="{{ $product->sku ?? old('sku') }}" title="SKU must start like SK-PR100 followed by up to 6 hexadecimal characters" class="form-control" required placeholder="Enter product sku (example: SK-PR100) ..."/>
                                    </div>

                                    <div class="mb-3">
                                        <label for="shortDesc">Short Description <span class="text-danger">*</span></label>
                                        <textarea name="short_description" id="shortDesc" cols="30" rows="10" class="form-control ckeditor" required placeholder="Enter product short description ...">{{ $product->short_description ?? old('short_description') }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="longDesc">Long Description <span class="text-danger">*</span></label>
                                        <textarea name="long_description" id="longDesc" cols="30" rows="10" class="form-control ckeditor" required placeholder="Enter product long description ...">{{ $product->long_description ?? old('long_description') }}</textarea>
                                    </div>

                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Update
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </main>
@endsection

@push('script')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush