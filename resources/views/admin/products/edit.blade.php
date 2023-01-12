@extends('layout.admin.master')

@section('content')
    <div class="nk-content">
    <div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Product</h3>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('admin.products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label" for="product-title">Product Title</label>
                    <div class="form-control-wrap">
                        <input type="text" name="name" class="form-control" id="product-title"
                            value="{{ $product->name }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="regular-price">Regular Price</label>
                    <div class="form-control-wrap">
                        <input type="text" name="regular_price" class="form-control" id="regular-price"
                            value="{{ $product->regular_price }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="sale-price">Sale Price</label>
                    <div class="form-control-wrap">
                        <input type="text" name="sales_price" class="form-control" id="sale-price"
                            value="{{ $product->sale_price }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="stock">Stock</label>
                    <div class="form-control-wrap">
                        <input type="text" name="stock" class="form-control" id="stock"
                            value="{{ $product->stock }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label" for="SKU">SKU</label>
                    <div class="form-control-wrap">
                        <input type="text" name="sku" class="form-control" id="SKU"
                            value="{{ $product->sku }}">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <div class="form-control-wrap">
                        <label class="form-label" for="category">Category</label>
                        <select class="form-select" name="category"
                            aria-label="multiple select example">
                            <option selected>Open this select menu</option>
                            <option value="cat_1">One</option>
                            <option value="cat_2">Two</option>
                            <option value="cat_3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label" for="tags">Tags</label>
                    <div class="form-control-wrap">
                        <input type="text" name="tags" class="form-control" id="tags"
                            value="{{ $product->tag }}">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label class="form-label" for="tags">Description</label>
                    <div class="form-control-wrap">
                        <textarea name="description" class="form-control" required cols="30" rows="10"
                            placeholder="Product description">{{ $product->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="upload-zone small bg-lighter my-2">
                    <div class="dz-message">
                        <span class="dz-message-text">Drag and drop file</span>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </div>
        {{-- <div class="row">
            <div class="col-xs-12 col-sm-14 col-md-12">
                <div class="form-group mb-3">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Title" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group mb-3">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description">{{ $product->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Regular Price:</strong>
                    <input type="number" name="regular_price" class="form-control" placeholder="Regular Price" value="{{ $product->regular_price }}">
                </div>

                <div class="form-group">
                    <strong>Sales Price:</strong>
                    <input type="number" name="sales_price" class="form-control" placeholder="Regular Price" value="{{ $product->sales_price }}">
                </div>
                <div class="form-group">
                    <strong>Stock:</strong>
                    <input type="number" name="stock" class="form-control" placeholder="Sales Price" value="{{ $product->stock }}">
                </div>

                <div class="form-group">
                    <strong>SKU:</strong>
                    <input type="text" name="sku" class="form-control" placeholder="SKU" value="{{ $product->sku }}">
                </div>

            </div>
        </div> --}}
    </form>
    </div>
@endsection
