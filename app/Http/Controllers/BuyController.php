<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    //
    public function index()
    {
        $buy['buys'] = Buy::paginate(5);
        return view('buys.index', $buy);
    }
    public function create()
    {
        return view('buys.create');
    }
    public function store(Request $request)
    {
        $buy = request()->except('_token');
        Buy::insert($buy);
        return redirect('buys');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $buy = Buy::findOrFail($id);
        return view('buys.edit', compact('buy'));
    }
    public function update(Request $request, $id)
    {
        $buy = request()->except(['_token', '_method']);
        Buy::where('id', '=', $id)->update($buy);
        return redirect()->route('buys.index');
    }
    public function destroy($id)
    {
        
    }
}
