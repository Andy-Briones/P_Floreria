<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sell;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sell>
 */
class SellFactory extends Factory
{
    protected $model = Sell::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id'  => Product::factory(),
            'cantidad'    => $this->faker->numberBetween(1, 10),
            'fecha_venta' => $this->faker->date(),
            'total'       => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
