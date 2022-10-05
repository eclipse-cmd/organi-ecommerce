@extends('layout.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
                <a class="btn btn-primary" href="{{ route('admin.products.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
            <div class="col-xs-12 col-sm-12-md-12">
                <strong>Title:</strong>
                    {{ $product->title }}
            </div>
        <br>
            <div class="col-xs-12 col-sm-12-md-12">
                <p><strong>Description:</strong>
                    {{ $product->description }}</p>
            </div>
        <br>
            <div class="col-xs-12 col-sm-12-md-12">
                <strong>Price:</strong>
                {{ $product->price }}
            </div>
    </div>
@endsection
