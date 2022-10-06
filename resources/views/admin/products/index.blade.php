@extends('layout.admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 margin-tb mb-1">
            <div class="">
                <h2>PRODUCT LIST</h2>
            </div>
            <div class="pull-right mb-2 pb-2 mt-2">
                <a class="btn btn-success" href="{{ route('admin.products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">S/N</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        @foreach ($products as $i => $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>

                <td class="d-flex justify-content-start">

                    <a class="btn btn-info mr-3" href="{{ route('admin.products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary mr-3" href="{{ route('admin.products.edit',$product->id) }}">Edit</a>

                    <form action="{{ route('admin.products.destroy',$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $products->links()}}

@endsection
