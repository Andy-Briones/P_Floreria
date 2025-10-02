<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sell;

use Illuminate\Http\Request;

class SellController extends Controller
{
    //
    public function index()
    {
        $venta['sells'] = Sell::paginate(5);
        return view('sells.index', $venta);
    }
    public function create()
    {
        $produc = Product::all();   // todos los productos
        return view('sells.create', [
            'Modo' => 'crearV',
            'produc' => $produc
        ]);
    }
    public function store(Request $request)
    {
        $venta = request()->except('_token');
        $request->validate([
            'product_id'  => 'required|exists:alsproducts,id',
            'cantidad'    => 'required|integer|min:1',
            'fecha_venta' => 'required|date',
            'total'       => 'required|numeric|min:0',
        ]);
        Sell::insert($venta);
        return redirect('sells');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $venta = Sell::findOrFail($id);
        $produc = Product::all();   // productos
        return view('sells.edit', [
            'venta' => $venta,
            'produc' => $produc,
            'Modo' => 'editarV'
        ]);
    }
    public function update(Request $request, $id)
    {
        $venta = request()->except(['_token', '_method']);
        Sell::where('id', '=', $id)->update($venta);
        return redirect()->route('sells.index');
    }
    public function destroy($id)
    {
        
    }
}
