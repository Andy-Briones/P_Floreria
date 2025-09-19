{{-- Categoria --}}
@if($Modo == 'crearPRC' || $Modo == 'editarPRC')
    <h3>{{ $Modo == 'crearPRC' ? 'Agregar Categoria' : 'Modificar Categoria' }}</h3>

<div class="row g-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Nombre de la Categoria</label>
                    <input type="text" name="name" id="name" class="form-control"
                    value="{{ isset($category->name)?$category->name : '' }}">
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Descripcion </label>
                    <input type="text" name="description" id="description" class="form-control"
                    value="{{ isset($category->description)?$category->description : '' }}">
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
                    value="{{ isset($product->name)?$product->name : '' }}">
                </div>
                <div class="col-md-6">
                    <label for="description" class="form-label">Descripcion </label>
                    <input type="text" name="description" id="description" class="form-control"
                    value="{{ isset($product->description)?$product->description : '' }}">
                </div>
                <div class="col-md-6">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" step="0.01" name="price" id="price" class="form-control"
                    value="{{ isset($product->price)?$product->price : '' }}">
                </div>
                <div class="col-md-6">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" name="stock" id="stock" class="form-control">
                    value="{{ isset($product->stock)?$product->stock : '' }}">
                </div>
</div>
@endif