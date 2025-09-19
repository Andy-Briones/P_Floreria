<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index()
    {
        $client['clients'] = Client::paginate(5);
        return view('people.clientss.index', $client);
    }
    public function create()
    {
        return view('people.clientss.create');
    }
    public function store(Request $request)
    {
        $client = request()->except('_token');
        Client::insert($client);
        return redirect('clients');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('people.clientss.edit', compact('client'));
    }
    public function update(Request $request, $id)
    {
        $client = request()->except(['_token', '_method']);
        Client::where('id', '=', $id)->update($client);
        return redirect()->route('people.clientss.index');
    }
    public function destroy($id)
    {
        
    }
}
