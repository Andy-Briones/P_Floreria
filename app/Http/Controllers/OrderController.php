<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $pedido['orders'] = Order::paginate(5);
        return view('pedido.index', $pedido);
    }
    public function create()
    {
        $usuario = User::all();   // todos los usuarios
        $productos = Product::all();   // todos los productos

        return view('pedido.create', [
            'Modo' => 'crearPedido',
            'usuario' => $usuario,
            'productos' => $productos
        ]);
    }
    public function store(Request $request)
    {
        $pedido = request()->except('_token');
        Order::insert($pedido);
        return redirect('orders');//->with('mensaje', 'Categoría agregada con éxito');
    }
    public function show()
    {
        
    }
    public function edit($id)
    {
        $pedido = Order::findOrFail($id);
        $usuario = User::all();   // usuario
        $productos = Product::all();           // productos
        
        return view('pedido.edit', [
        'pedido' => $pedido,
        'usario' => $usuario,
        'productos' => $productos,
        'Modo' => 'editarPedidos'
        ]);
    }
    public function update(Request $request, $id)
    {
        $pedido = request()->except(['_token', '_method']);
        Order::where('id', '=', $id)->update($pedido);
        return redirect()->route('pedido.index');
    }
    public function destroy($id)
    {
        
    }
}
