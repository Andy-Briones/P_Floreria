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
        return view('people.userss.create');
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
        $us = User::findOrFail($id);
        return view('people.userss.edit', compact('user'));
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
