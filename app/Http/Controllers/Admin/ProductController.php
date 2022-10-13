<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::latest()->paginate(20)
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'sku' => 'required',
            // 'category' => 'required',
            'description' => 'required',
            'sales_price' => 'required',
            'regular_price' => 'required',
//            'description' => 'required',
        ]);

        Product::create($validatedData);

        return redirect()->back()->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        return view('admin.products.show', [
            'product' => Product::findorfail($id)
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'sales_price' => 'required',
            'regular_price' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('admin.products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Product deleted successfully');
    }
}
