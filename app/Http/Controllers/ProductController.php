<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('admin.products.index')
            ->with('success','Product created successfully.');
    }


    public function show($id)
    {
        return view('admin.products.show',[
            'product' => Product::findorfail($id)
        ]);
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit',compact('product'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.index')
            ->with('success','Product updated successfully');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success','Product deleted successfully');
    }
}
