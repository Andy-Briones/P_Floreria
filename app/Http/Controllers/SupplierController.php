<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function index()
    {
        $supplier['suppliers'] = Supplier::paginate(5);
        return view('people.suppliers.index', $supplier);
    }
    public function create()
    {
        return view('people.suppliers.create');
    }
    public function store(Request $request)
    {
        $supplier = request()->except('_token');
        Supplier::insert($supplier);
        return response()->json(['success' => true]);//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('people.suppliers.edit', compact('supplier'));
    }
    public function update(Request $request, $id)
    {
        $supplier = request()->except(['_token', '_method']);
        Supplier::where('id', '=', $id)->update($supplier);
        return redirect()->route('people.suppliers.index');
    }
    public function destroy($id)
    {
        
    }
}
