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
    private static $idCounter = 10001;

    public function definition(): array
    {

        return [
            'id'=> self::$idCounter++,
            'name' => fake()->unique()->word(),
            // 'description' => fake()->unique()->safeEmail(),
            'category_id' => fake()->numberBetween(1, 6),
            'user_id' => 1,
            'image' => fake()->imageUrl(),
            'buying_price' => $buyingPrice = fake()->numberBetween(1, 100),
            'selling_price' => $buyingPrice + fake()->numberBetween(1, 100),
            'stock' => $stock = fake()->numberBetween(1, 100),
            'units_ordered' => $unitsOrdered = fake()->numberBetween(1, 100),
            'units_sold' => fake()->numberBetween(1, $stock + $unitsOrdered),
            'available_units' => fn(array $attributes) => $attributes['stock'] + $attributes['units_ordered'] - $attributes['units_sold'],
            'supplier' => fake()->name(),
            'buying_date' => now(),
            'selling_date' => now(),
            'order_date' => now(),
 
        ];
    }
}
