<?php

namespace Database\Factories;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Like>
 */
class LikeFactory extends Factory
{
    protected static $recipeId = 1;

    public function definition()
    {
        
        return [
            'paid_member_id' => $this->faker->numberBetween(1, 10),
            'recipe_id' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
