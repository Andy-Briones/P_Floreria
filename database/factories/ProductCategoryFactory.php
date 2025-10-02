<?php

namespace Database\Factories;

use App\Models\Product_Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product_Category>
 */
class ProductCategoryFactory extends Factory
{
    protected $model = Product_Category::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }
}
