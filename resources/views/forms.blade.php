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