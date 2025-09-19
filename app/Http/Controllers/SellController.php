<?php

namespace App\Http\Controllers;

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
        return view('sells.create');
    }
    public function store(Request $request)
    {
        $venta = request()->except('_token');
        Sell::insert($venta);
        return redirect('sells');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $venta = Sell::findOrFail($id);
        return view('sells.edit', compact('sell'));
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
