<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Tu CSS personalizado --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
    <div class="card shadow border-0">
        <div class="card-header bg-danger text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">📋 Lista de Ventas</h4>
            <a href="{{ route('sells.create') }}" class="btn btn-light">➕ Nueva Venta</a>
            <a href="{{url('/')}}" class="btn btn-light">Regresar</a>
        </div>
        <div class="card-body">
            @if(session('mensaje'))
                <div class="alert alert-success">{{ session('mensaje') }}</div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Fecha de Venta</th>
                            <th>Total</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($sells as $venta)
                            <tr>
                                <td>{{ $venta->id }}</td>
                                <td>{{ $venta->product->name ?? 'N/A' }}</td>
                                <td>{{ $venta->cantidad }}</td>
                                <td>{{ $venta->fecha_venta }}</td>
                                <td>💲{{ number_format($venta->total, 2) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('sells.edit', $venta->id) }}" class="btn btn-sm btn-warning">
                                        ✏️ Editar
                                    </a>

                                    {{--  <form action="{{ route('sells.destroy', $venta->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Seguro que deseas eliminar esta venta?')">
                                            🗑️ Eliminar
                                        </button>
                                    </form>  --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted">No hay ventas registradas</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Paginación --}}
            <div class="mt-3">
                {{ $sells->links() }}
            </div>
        </div>
    </div>
</div>
</body>
</html>



