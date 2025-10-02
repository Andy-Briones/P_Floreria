<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'fSurname' => $this->faker->lastName(),
            'sSurname' => $this->faker->lastName(),
            'dni' => $this->faker->numerify('########'), // 8 dígitos exactos
            'telefono' => $this->faker->numerify('#########'),
            'correo' => $this->faker->unique()->safeEmail(),
            'fecha_nacimiento' => $this->faker->date(),
            'genero' => $this->faker->boolean(),
            'direccion' => $this->faker->address(),
        ];
    }
}