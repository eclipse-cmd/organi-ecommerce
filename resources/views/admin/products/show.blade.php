@extends('layout.admin.master')

@section('content')
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
            <div>
                <h6 class="fs-6 fw-light"> <span class="fw-bold">Title:</span>  {{ $product->title }}</h6>
                <h6 class="fs-6 fw-light"> <span class="fw-bold">Description:</span>  {{ $product->description }}</h6>
                <h6 class="fs-6 fw-light"> <span class="fw-bold">Price:</span>
                    {{ $product->price }}
                </h6>
            </div>
        </div>
    </div>

@endsection
