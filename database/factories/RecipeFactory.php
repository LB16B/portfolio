<?php

namespace Database\Factories;

use App\Models\Models;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text,
            'ingredient_category_id' => $this->faker->numberBetween(1, 15),
            'cal' => $this->faker->numberBetween(100, 1000),
            'time' => $this->faker->numberBetween(10, 60),
            'price' => $this->faker->randomFloat(2, 5, 50),
        ];
    }
}
