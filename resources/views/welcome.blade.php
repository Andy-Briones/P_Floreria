

    {{-- Tu CSS personalizado --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Florería</title>
    <link href="{{ asset('resources/css/ewlcomevista.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    @include('forms', ['Modo' => 'Encabezado'])

    <div><h3>FLORERÍA ALESSA</h3></div>

    {{--  <div>
        <a href="{{ url('/sells')}}" class="btn">Ventas</a>
        <a href="{{ url('/clients/create')}}" class="btn">Clientes</a>
    </div>

    <div>
        <a href="{{ url('/product_categories/create')}}" class="btn">Categoria</a>
        <a href="{{ url('/suppliers/create')}}" class="btn">Proveedores</a>
        <a href="{{ url('/orders/create')}}" class="btn">Pedidos</a>
    </div>  --}}
</body>
</html>
