<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $user['users'] = User::paginate(5);
        return view('people.userss.index', $user);
    }
    public function create()
    {
        $clien = Client::all();   // todas las categorías

        return view('people.userss.create', [
            'Modo' => 'crearUser',
            'clien' => $clien
        ]);
    }
    public function store(Request $request)
    {
        $user = request()->except('_token');
        User::insert($user);
        return redirect('users');//->with('mensaje', 'Usuario agregado con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $cli = Client::all();   // cliente
        
        return view('people.userss.edit', [
        'user' => $user,
        'client' => $cli,
        'Modo' => 'editarUser'
        ]);
    }
    public function update(Request $request, $id)
    {
        $user = request()->except(['_token', '_method']);
        User::where('id', '=', $id)->update($user);
        return redirect()->route('people.userss.index');
    }
    public function destroy($id)
    {
        
    }
}
