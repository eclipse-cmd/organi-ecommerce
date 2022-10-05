@extends('layout.admin.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb py-lg-3">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
                <a class="btn btn-primary" style="padding-bottom: 5px" href="{{ route('admin.products.index') }}">Back</a>
        </div>
    </div>

    <div class="row">
        <table border="2px">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody style="font-weight: bold; color: black">
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
            </tbody>

        </table>
    </div>

@endsection
