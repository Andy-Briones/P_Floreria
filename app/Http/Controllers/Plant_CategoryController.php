<?php

namespace App\Http\Controllers;

use App\Models\Plant_Category;
use Illuminate\Http\Request;

class Plant_CategoryController extends Controller
{
    //
    public function index()
    {
        $planta['plant__categories'] = Plant_Category::paginate(5);
        return view('plantsGeneral.categories.index', $planta);
    }
    public function create()
    {
        return view('plantsGeneral.categories.create');
    }
    public function store(Request $request)
    {
        $planta = request()->except('_token');
        Plant_Category::insert($planta);
        return redirect('plant_categories');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $planta = Plant_Category::findOrFail($id);
        return view('plantsGeneral.categories.edit', compact('plant_category'));
    }
    public function update(Request $request, $id)
    {
        $planta = request()->except(['_token', '_method']);
        Plant_Category::where('id', '=', $id)->update($planta);
        return redirect()->route('plantsGeneral.categories.index');
    }
    public function destroy($id)
    {
        
    }
}
