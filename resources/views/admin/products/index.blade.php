@extends('layout.admin.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 margin-tb">
            <div class="pull-left text-center">
                <h2>PRODUCT LIST</h2>
            </div>
            <div class="pull-right">
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

                <td>
                    <form action="{{ route('admin.products.destroy',$product->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('admin.products.show',$product->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('admin.products.edit',$product->id) }}">Edit</a>

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
