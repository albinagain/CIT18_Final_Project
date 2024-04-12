<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $plantNames = ['Lily', 'Rose', 'Sunflower', 'Snake Plant', 'Daisy', 'Peach', 'Mario', 'Luigi', 'Bowser', 'Yoshi', 'Donkey Kong', 'Wario', 'Waluigi', 'Toad', 'Rosalina', 'Pauline', 'Oompa Lumpa'];
        return [
            'name' => fake()->name(),
            'price' => fake()->numberBetween(100, 1000);
        ];
    }
}
