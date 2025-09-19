<?php

namespace App\Http\Controllers;

use App\Models\Boss;
use Illuminate\Http\Request;

class BossController extends Controller
{
    //
    public function index()
    {
        $boss['bosses'] = Boss::paginate(5);
        return view('people.bosses.index', $boss);
    }
    public function create()
    {
        return view('people.bosses.create');
    }
    public function store(Request $request)
    {
        $boss = request()->except('_token');
        Boss::insert($boss);
        return redirect('bosses');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $boss = Boss::findOrFail($id);
        return view('people.bosses.edit', compact('boss'));
    }
    public function update(Request $request, $id)
    {
        $boss = request()->except(['_token', '_method']);
        Boss::where('id', '=', $id)->update($boss);
        return redirect()->route('bosses.index');
    }
    public function destroy($id)
    {
        
    }
}
