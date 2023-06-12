<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\Manual;
use App\Models\ingredient;
use Faker\Provider\Base;
use Database\Factories\JapaneseFakerProvider as FactoriesJapaneseFakerProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class IngredientFakerProvider extends Base
{
    protected static $ingredient = [
        '水',
        'ごはん',
        '玉ねぎ',
        'かぼちゃ',
        'りんご',
        '片栗粉',
        'にんじん',
        'バナナ',
        '豆腐',
        'じゃがいも',
        'お湯',
        'キャベツ',
        'おかゆ',
        'さつまいも',
        'ツナ水煮缶',
        '液体ミルク',
        'サバ水煮缶',
        'トマトピューレ',
        'コンソメ',
        'きゅうり',
        '焼きのり',
        'マカロニ',
        'ほうれん草',
        '卵',
        'サラダ油',
    ];

    public static function ingredient()
    {
        return static::randomElement(static::$ingredient);
    }
}

class AmountFakerProvider extends Base{

    protected static $amount = [
        '50ml',
        '大さじ1',
        '10g',
        '小さじ1',
        '50g',
        '300cc',
        '25g',
        '90g',
        '1/4缶',
        '50cc',
        '大さじ3',
        '少々',
        '30g',
        '50ml',
        '適量',
        '160g',
        '15g',
        '30g',
        '1個',
    ];

    public static function amount()
    {
        return static::randomElement(static::$amount);
    }
}

class IngredientFactory extends Factory
{
    public function definition()
    {
        $this->faker->addProvider(new IngredientFakerProvider($this->faker));
        $this->faker->addProvider(new AmountFakerProvider($this->faker));

        return [
            'recipe_id' => $this->faker->numberBetween(1, 1000),
            'ingredient1' => IngredientFakerProvider::ingredient(),
            'ingredient2' => IngredientFakerProvider::ingredient(),
            'ingredient3' => IngredientFakerProvider::ingredient(),
            'ingredient4' => IngredientFakerProvider::ingredient(),
            'ingredient5' => IngredientFakerProvider::ingredient(),
            'ingredient6' => IngredientFakerProvider::ingredient(),
            'ingredient7' => IngredientFakerProvider::ingredient(),
            'ingredient8' => IngredientFakerProvider::ingredient(),
            'amount1' => AmountFakerProvider::amount(),
            'amount2' => AmountFakerProvider::amount(),
            'amount3' => AmountFakerProvider::amount(),
            'amount4' => AmountFakerProvider::amount(),
            'amount5' => AmountFakerProvider::amount(),
            'amount6' => AmountFakerProvider::amount(),
            'amount7' => AmountFakerProvider::amount(),
            'amount8' => AmountFakerProvider::amount(),
        ];
    }
}
