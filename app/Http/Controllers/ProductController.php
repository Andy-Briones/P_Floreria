<?php

namespace App\Http\Controllers;

use App\Models\Product_Category;
use App\Models\Supplier;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        // Cargar relaciones correctas (por ejemplo: categories y supplier)
        $query = Product::with(['categories', 'supplier']);

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");
        }

        $products = $query->paginate(5);

        return view('productsGeneral.products.vistauser.secindex', compact('products'));
    }
    // 'productsGeneral.products.vistauser.secindex'
    // 'productsGeneral.products.index'

    public function create()
    {
        $categorys = Product_Category::all();   // todas las categorías
        $suppliers = Supplier::all();   // todos los proveedores

        return view('productsGeneral.products.create', [
            'Modo' => 'crearP',
            'categorys' => $categorys,
            'suppliers' => $suppliers
        ]);
    }
    public function store(Request $request)
    {
        $product = request()->except('_token');
        $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
        ]);
        Product::insert($product);
        return redirect('products');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categorys = Product_Category::all();   // categorías
        $suppliers = Supplier::all();           // proveedores
        
        return view('productsGeneral.products.edit', [
        'products' => $product,
        'categorys' => $categorys,
        'suppliers' => $suppliers,
        'Modo' => 'editarP'
        ]);
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
