<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
  //   	// $products = Product::get();
  //   	$user = User::find(1);
  //   	$products  = $user->products()
		// ->with('image', 'categories', 'prices')->get();
  //   	return view('products.index', compact('products'));

    	$products = Product::paginate(5);
		return view('products.index', compact('products'));    	
    }

    public function show($id)
    {
    	$product = Product::findOrFail($id);
    	return view('products.show', compact('product'));
    }
    public function create()
    {
    	$users = User::get();
    	return view('products.create', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
        	'name' => 'required|min:2|max:30',
        	'detail' => 'required|min:2|max:30'
        ]);
        Product::create($request->toArray());
        return redirect()->route('products.index')->with('status', 'El producto se ha creado con exito');
    }
    public function edit($id)
    {
    	$product = Product::findOrFail($id);
    	return view('products.edit', compact('product'));
    }

    public function update(Product $product)
    {
        request()->validate([
            'name' => 'required|min:2|max:30',
            'detail' => 'required|min:2|max:30'
        ]);
        $product->update([
            'name' => request('name'),
            'detail' => request('detail')
        ]);
        return redirect()->route('products.index')->with('status', ' El producto se ha actualizado con exito');
    }

    public function destroy(Product $product)
    {
    	$product->delete();
    	return redirect()->route('products.index')->with('status',' el producto se ha eliminado correctamente');
    }
}
