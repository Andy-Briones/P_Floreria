<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product['products'] = Product::paginate(5);
        return view('productsGeneral.products.index', $product);
    }
    public function create()
    {
        return view('productsGeneral.products.create');
    }
    public function store(Request $request)
    {
        $product = request()->except('_token');
        Product::insert($product);
        return redirect('products');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('productsGeneral.products.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = request()->except(['_token', '_method']);
        Product::where('id', '=', $id)->update($product);
        return redirect()->route('productsGeneral.products.index');
    }
    public function destroy($id)
    {
        
    }
}
