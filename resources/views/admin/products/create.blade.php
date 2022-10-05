@extends('layout.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Product Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter the product title">
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea class="form-control" name="description" placeholder="Enter the product description"></textarea>
        </div>
        <div class="form-group">
            <label>Product Price</label>
            <input type="number" name="price" maxlength="99999999999999" step=" .01" class="form-control" placeholder="Enter the product price">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
