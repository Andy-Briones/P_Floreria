{{-- Categoria --}}
@if($Modo == 'crearPRC' || $Modo == 'editarPRC')
    <h3>{{ $Modo == 'crearPRC' ? 'Agregar Categoria' : 'Modificar Categoria' }}</h3>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Nombre de la Categoria</label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ isset($category->name) ? $category->name : '' }}">
        </div>
        <div class="col-md-6">
            <label for="description" class="form-label">Descripcion </label>
            <input type="text" name="description" id="description" class="form-control"
                value="{{ isset($category->description) ? $category->description : '' }}">
        </div>
    </div>
@endif

{{-- Producto --}}
@if($Modo == 'crearP' || $Modo == 'editarP')
    <h3>{{ $Modo == 'crearP' ? 'Agregar Producto' : 'Modificar Producto' }}</h3>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Nombre del Producto</label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ isset($product->name) ? $product->name : '' }}">
        </div>
        <div class="col-md-6">
            <label for="description" class="form-label">Descripcion </label>
            <input type="text" name="description" id="description" class="form-control"
                value="{{ isset($product->description) ? $product->description : '' }}">
        </div>
        <div class="col-md-6">
            <label for="price" class="form-label">Precio</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control"
                value="{{ isset($product->price) ? $product->price : '' }}">
        </div>
        <div class="col-md-6">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control"
                value="{{ isset($product->stock) ? $product->stock : '' }}">
        </div>
        <div class="col-md-6">
            <label for="product_category_id" class="form-label">Categoria</label>
            <select name="product_category_id" id="product_category_id" class="form-select">
                @foreach($categorys as $category)
                    <option value="{{ $category->id }}" {{ isset($product->product_category_id) && $product->product_category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="supplier_id" class="form-label">Proveedor</label>
            <select name="supplier_id" id="supplier_id" class="form-select">
                @foreach($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" {{ isset($product->supplier_id) && $product->supplier_id == $supplier->id ? 'selected' : '' }}>
                        {{ $supplier->contactoName }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
@endif

{{-- Proveedor --}}
@if($Modo == 'crearSP' || $Modo == 'editarSP')
    <h3>{{ $Modo == 'crearSP' ? 'Agregar Proveedor' : 'Modificar Proveedor' }}</h3>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="contacotName" class="form-label">Nombre del Proveedor</label>
            <input type="text" name="contactoName" id="contactoName" class="form-control"
                value="{{ isset($supplier->contactName) ? $supplier->contactName : '' }}">
        </div>
        <div class="col-md-6">
            <label for="nameEmpresa" class="form-label">Nombre de Empresa </label>
            <input type="text" name="nameEmpresa" id="nameEmpresa" class="form-control"
                value="{{ isset($supplier->nameEmpresa) ? $supplier->nameEmpresa : '' }}">
        </div>
        <div class="col-md-6">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control"
                value="{{ isset($supplier->direccion) ? $supplier->direccion : '' }}">
        </div>
    </div>
@endif


{{-- Ventas --}}
@if($Modo == 'crearV' || $Modo == 'editarV')
    <h3>{{ $Modo == 'crearV' ? 'Agregar Venta' : 'Modificar Venta' }}</h3>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="contacotName" class="form-label">Nombre del Proveedor</label>
            <input type="text" name="contactoName" id="contactoName" class="form-control"
                value="{{ isset($supplier->contactName) ? $supplier->contactName : '' }}">
        </div>
        <div class="col-md-6">
            <label for="nameEmpresa" class="form-label">Nombre de Empresa </label>
            <input type="text" name="nameEmpresa" id="nameEmpresa" class="form-control"
                value="{{ isset($supplier->nameEmpresa) ? $supplier->nameEmpresa : '' }}">
        </div>
        <div class="col-md-6">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control"
                value="{{ isset($supplier->direccion) ? $supplier->direccion : '' }}">
        </div>
    </div>
@endif

{{-- Cliente --}}
@if($Modo == 'crearCli' || $Modo == 'editarCli')
    <h3>{{ $Modo == 'crearCli' ? 'Agregar Cliente' : 'Modificar Cliente' }}</h3>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Nombre del Cliente</label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ isset($client->name) ? $client->name : '' }}">
        </div>
        <div class="col-md-6">
            <label for="fSurname" class="form-label">Apellido Paterno </label>
            <input type="text" name="fSurname" id="fSurname" class="form-control"
                value="{{ isset($client->fSurname) ? $client->fSurname : '' }}">
        </div>
        <div class="col-md-6">
            <label for="sSurname" class="form-label">Apellido Materno</label>
            <input type="text" name="sSurname" id="sSurname" class="form-control"
                value="{{ isset($client->sSurname) ? $client->sSurname : '' }}">
        </div>
        <div class="col-md-6">
            <label for="dni" class="form-label">DNI</label>
            <input type="text" name="dni" id="dni" class="form-control"
                value="{{ isset($client->dni) ? $client->dni : '' }}">
        </div>
        <div class="col-md-6">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" name="telefono" id="telefono" class="form-control"
                value="{{ isset($client->telefono) ? $client->telefono : '' }}">
        </div>
        <div class="col-md-6">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" name="correo" id="correo" class="form-control"
                value="{{ isset($client->correo) ? $client->correo : '' }}">
        </div>
        <div class="col-md-6">
            <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control"
                value="{{ isset($client->fecha_nacimiento) ? $client->fecha_nacimiento : '' }}"
                max="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">
        </div>

        <div class="col-md-6">
            <label for="genero" class="form-label">Género</label>
            <select name="genero" id="genero" class="form-select">
                <option value="1" {{ isset($client->genero) && $client->genero == 1 ? 'selected' : '' }}>Masculino</option>
                <option value="0" {{ isset($client->genero) && $client->genero == 0 ? 'selected' : '' }}>Femenino</option>
                <option value="0" {{ isset($client->genero) && $client->genero == 2 ? 'selected' : '' }}>Otro</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" id="direccion" class="form-control"
                value="{{ isset($client->direccion) ? $client->direccion : '' }}">
        </div>
    </div>
@endif

{{-- Usuario --}}
@if($Modo == 'crearUser' || $Modo == 'editarUser')
    <h3>{{ $Modo == 'crearUser' ? 'Agregar Usuario' : 'Modificar Usuario' }}</h3>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="name" class="form-label">Nombre del Usuario</label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ isset($user->name) ? $user->name : '' }}">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Correo </label>
            <input type="email" name="email" id="email" class="form-control"
                value="{{ isset($user->email) ? $user->email : '' }}">
        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control"
                value="{{ isset($user->password) ? $user->password : '' }}">
        </div>
        {{--  <div class="col-md-6">
            <label for="password" class="form-label">Confirmar Contraseña</label>
            <input type="password" name="password" id="password" class="form-control"
                value="{{ isset($user->password) ? $user->password : '' }}">
        </div>  --}}
        <div class="col-md-6">
            <label for="client_id" class="form-label">Cliente</label>
            <select name="client_id" id="client_id" class="form-select">
                @foreach($cli as $clien)
                    <option value="{{ $clien->id }}" {{ isset($user->clien_id) && $user->clien_id == $clien->id ? 'selected' : '' }}>
                        {{ $clien->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
@endif

{{-- Pedido --}}
@if($Modo == 'crearPedido' || $Modo == 'editarPedido')
    <h3>{{ $Modo == 'crearPedido' ? 'Agregar Pedido' : 'Modificar Pedido' }}</h3>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="user_id" class="form-label">Usuario</label>
            <select name="user_id" id="user_id" class="form-select">
                @foreach($usuario as $usu)
                    <option value="{{ $usu->id }}" {{ isset($order->usu_id) && $order->usu_id == $usu->id ? 'selected' : '' }}>
                        {{ $usu->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="product_id" class="form-label">Producto</label>
            <select name="product_id" id="product_id" class="form-select">
                @foreach($productos as $prod)
                    <option value="{{ $prod->id }}" {{ isset($order->prod_id) && $order->prod_id == $prod->id ? 'selected' : '' }}>
                        {{ $prod->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
@endif