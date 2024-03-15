@extends('backend.master')
@section('content')
    <main class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Products</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Product</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <p class="card-title-desc">Products will shows dynamically using DataTables</p>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                        <th>Name</th>
                                        <th class="col-lg-1">Image</th>
                                        <th class="col-lg-1">Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td class="text-center"><img src="{{ asset('images/product/'.$product->image) }}" width="50" alt="product image"></td>
                                        <td class="d-flex justify-content-evenly">
                                            <a href="{{ route('product.edit',$product->id) }}"><i class="fas fa-pen"></i></a>
                                            <a href="{{ route('product.delete',$product->id) }}"><i class="fas fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>
    </main>
@endsection