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

            <div class="position-relative mb-5">
                <form action="{{ route('sale.index') }}" method="GET">
                    @csrf
                    <div class="d-flex align-items-center col-md-4 position-absolute top-0 end-0">
                        <input type="search" name="search" class="form-control">
                        <button type="submit" class="btn text-primary"><i class="fas fa-search"></i></button>
                        <a class="btn text-secondary" href="{{ route('sale.index') }}" ><i class="fas fa-redo-alt"></i></a>
                    </div>
                </form>
            </div>
            
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-5">
                @forelse ($products as $product)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/product/'.$product->image) }}" class="w-100 mb-4 rounded" alt="...">
                                <h5 class="card-title mb-4" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $product->name }}</h5>
                                <button class="btn btn-primary w-100 raised">Sales</button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center">You have no products</div>
                @endforelse
            </div>
        </div>
    </div>
</main>
@endsection