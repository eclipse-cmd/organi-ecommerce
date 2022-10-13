@extends('layout.admin.master')

@section('content')
    <div class="nk-content">
        <div class="row">
            <div class="col-12 mb-5">
                <div class="d-flex justify-content-between">
                    <div class="">
                        <h3> Show Product</h3>
                    </div>
                    <div>
                        <a class="btn btn-primary" href="{{ route('admin.products.index') }}">Back</a>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card-body">
                    <h6 class="fs-6 fw-light"> <span class="fw-bold">Name:</span>{{ $product->name }}</h6>
                    <h6 class="fs-6 fw-light"> <span class="fw-bold">Description:</span>{{ $product->description }}</h6>
                    <h6 class="fs-6 fw-light"> <span class="fw-bold">Regular Price:</span>{{ $product->regular_price }}</h6>
                    <h6 class="fs-6 fw-light"> <span class="fw-bold">Sales Price:</span>{{ $product->sales_price }}</h6>
                    <h6 class="fs-6 fw-light"> <span class="fw-bold">Stock:</span>{{ $product->stock }}</h6>
                    <h6 class="fs-6 fw-light"> <span class="fw-bold">SKU:</span>{{ $product->sku }}</h6>
                </div>
            </div>
        </div>
    </div>

@endsection
