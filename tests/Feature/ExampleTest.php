<?php
use App\Models\Product;
use App\Models\Sell;
use App\Models\Product_Category;
use App\Models\Supplier;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

// Ejemplo 
test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

//Ventas
// 1. Store
test('almacena una nueva venta', function () {
    $product = Product::factory()->create();

    $data = [
        'product_id'  => $product->id,
        'cantidad'    => 5,
        'fecha_venta' => now()->format('Y-m-d'),
        'total'       => 100.50,
    ];

    $response = $this->post('/sells', $data);

    $response->assertRedirect('/sells');
    $this->assertDatabaseHas('alssells', $data);
});

// 2. Update - 
test('puede actualizar una venta existente', function () {
    $producto = Product::factory()->create();

    $venta = Sell::factory()->create([
        'product_id'  => $producto->id,
        'cantidad'    => 2,
        'fecha_venta' => now()->subDay()->format('Y-m-d'),
        'total'       => 80.00,
    ]);

    $updateData = [
        'product_id'  => $producto->id,
        'cantidad'    => 6,
        'fecha_venta' => now()->format('Y-m-d'),
        'total'       => 240.00,
    ];

    $response = $this->put("/sells/{$venta->id}", $updateData);

    $response->assertRedirect(route('sells.index'));
    $this->assertDatabaseHas('alssells', $updateData);
});

// 3.Create 
test('puede mostrar el formulario para crear una venta', function () {
    $producto = Product::factory()->create();

    $response = $this->get('/sells/create');

    $response->assertStatus(200);
    $response->assertViewIs('sells.create');
    $response->assertSee($producto->name);
});

// 4. Validar que no se pueda crear una venta sin datos obligatorios
test('no se puede crear una venta sin datos requeridos', function () {
    $response = $this->post('/sells', []); // vacío

    $response->assertSessionHasErrors(['product_id', 'cantidad', 'fecha_venta', 'total']);
});

// 5. Mostrar formulario de edición de venta
test('puede mostrar el formulario de edición de una venta', function () {
    $producto = Product::factory()->create();
    $venta = Sell::factory()->create([
        'product_id' => $producto->id,
    ]);

    $response = $this->get("/sells/{$venta->id}/edit");

    $response->assertStatus(200);
    $response->assertViewIs('sells.edit');
    $response->assertSee((string) $venta->cantidad);
});

//6. Mostrar lista de ventas
test('puede listar las ventas en la vista index', function () {
    $venta = Sell::factory()->create();

    $response = $this->get('/sells');

    $response->assertStatus(200);
    $response->assertViewIs('sells.index');
    $response->assertSee((string)$venta->id);
});

//productos
// 1. Store - guardar producto
test('puede almacenar un producto en la base de datos', function () {
    $categoria = Product_Category::factory()->create();
    $supplier = Supplier::factory()->create();

    $data = [
        'name'          => 'Producto Test',
        'description'   => 'Un producto de prueba',
        'price'         => 50.75,
        'stock'         => 10,
        'product_category_id'   => $categoria->id,
        'supplier_id'   => $supplier->id,
    ];

    $response = $this->post('/products', $data);

    $response->assertRedirect('/products');
    $this->assertDatabaseHas('alsproducts', $data);
});

// 2. Store - validar campos obligatorios
test('no se puede crear un producto sin datos requeridos', function () {
    $response = $this->post('/products', []);

    $response->assertSessionHasErrors(['name', 'price', 'stock']);
});

