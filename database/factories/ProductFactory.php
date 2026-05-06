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
        return [
            'img' => $this->faker->imageUrl(640, 480, 'products', true),
            'brand' => $this->faker->randomElement(['Nike', 'Adidas', 'Puma', 'Skechers', 'Reebok']),
            'title' => $this->faker->words(3, true),
            'rating' => $this->faker->optional()->numberBetween(1, 5),
            'reviews' => $this->faker->numberBetween(0, 500),
            'sellPrice' => $this->faker->randomFloat(2, 50, 5000),
            'orders' => (string) $this->faker->numberBetween(0, 1000),
            'mrp' => $this->faker->optional()->randomFloat(2, 100, 10000),
            'discount' => $this->faker->optional()->numberBetween(5, 80),
            'category' => $this->faker->randomElement(['men', 'women', 'child']),
        ];
    }
}
