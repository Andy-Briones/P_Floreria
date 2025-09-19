<div class="container mt-4">
        <form action="{{url('/product_categories')}}" method="POST" enctype="multipart/form-data"
            class="p-4 bg-white shadow rounded">
            @csrf
            @include('forms', ['Modo' => 'crearPRC'])
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success me-2">Agregar</button>
            </div>
        </form>
    </div>