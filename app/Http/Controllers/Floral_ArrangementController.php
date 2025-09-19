<?php

namespace App\Http\Controllers;

use App\Models\Floral_Arrangement;
use Illuminate\Http\Request;

class Floral_ArrangementController extends Controller
{
    //
    public function index()
    {
        $flor['floral__arrangements'] = Floral_Arrangement::paginate(5);
        return view('plantsGeneral.florals.index', $flor);
    }
    public function create()
    {
        return view('plantsGeneral.floral.create');
    }
    public function store(Request $request)
    {
        $flor = request()->except('_token');
        Floral_Arrangement::insert($flor);
        return redirect('floral_arrangements');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $flor = Floral_Arrangement::findOrFail($id);
        return view('plantsGeneral.floral.edit', compact('floral_arrangement'));
    }
    public function update(Request $request, $id)
    {
        $flor = request()->except(['_token', '_method']);
        Floral_Arrangement::where('id', '=', $id)->update($flor);
        return redirect()->route('plantsGeneral.florals.index');
    }
    public function destroy($id)
    {
        
    }
}
