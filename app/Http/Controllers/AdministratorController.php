<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    //
    public function index()
    {
        $admin['administrators'] = Administrator::paginate(5);
        return view('people.administrators.index', $admin);
    }
    public function create()
    {
        return view('people.administrators.create');
    }
    public function store(Request $request)
    {
        $admin = request()->except('_token');
        Administrator::insert($admin);
        return redirect('administrators');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $admin = Administrator::findOrFail($id);
        return view('people.administrators.edit', compact('administrator'));
    }
    public function update(Request $request, $id)
    {
        $admin = request()->except(['_token', '_method']);
        Administrator::where('id', '=', $id)->update($admin);
        return redirect()->route('people.administrators.index');
    }
    public function destroy($id)
    {
        
    }
}
