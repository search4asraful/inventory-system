@extends('backend.master')
@section('content')
    <main class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Category edit</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item">category</li>
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

                                <form class="custom-validation" action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <img src="{{ asset('images/category/'.$category->image) }}" alt="Image" style="max-width: 200px;">
                                    </div>
                                    <div class="mb-3">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control" accept="image/png, image/jpg, image/jpeg, image/webp"/>
                                    </div>

                                    <div class="mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" value="{{ $category->name }}" class="form-control" data-parsley-length="[0,55]" required placeholder="Enter category name ..."/>
                                    </div>

                                    <div class="mb-0">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                                Submit
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