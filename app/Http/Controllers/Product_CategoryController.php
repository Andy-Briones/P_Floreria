<?php

namespace App\Http\Controllers;

use App\Models\Product_Category;
use Illuminate\Http\Request;

class Product_CategoryController extends Controller
{
    //
    public function index()
    {
        $categories['product__categories'] = Product_Category::paginate(5);
        return view('productsGeneral.productCategorys.index', $categories);
    }
    public function create()
    {
        return view('productsGeneral.productCategorys.create');
    }
    public function store(Request $request)
    {
        $category = request()->except('_token');
        Product_Category::insert($category);
        return redirect('product_categories');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $category = Product_Category::findOrFail($id);
        return view('productsGeneral.productCategorys.edit', compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = request()->except(['_token', '_method']);
        Product_Category::where('id', '=', $id)->update($category);
        return redirect()->route('product_categories.index');
    }
    public function destroy($id)
    {
        
    }
}
