<?php

namespace Database\Factories;

use App\Models\Recipe;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Factories\Factory;

class JapaneseFakerProvider extends Base
{
    protected static $foodNames = [
        // 5 ~ 6月
        'りんごのパン粥',
        'さつまいもとトマトとりんご',
        'かぶのコーンポタージュ',
        'ミルクスイートポテト',
        'イチゴスムージー',
        'おさかなそぼろ',
        '鯛のとろとろ',
        'さつまいもごはん',
        // 7 ~ 8月
        '大根の煮物',
        'キウイミルク',
        'にんじんとトマトの茶わん蒸し',
        'かぶとポテトのミルク煮',
        'たまごとカッテージちーじのそぼろ',
        'ぱんでホワイトシチュー',
        'さつまいもボール',
        'レンジでなすのお浸し',
        'かぼちゃのミルクあんかけ',
        'ツナ缶の卵とじ',
        'かぶとしらすの青のりがけ',
        // 9 ~ 11月
        'ツナときゅうりのそうめん',
        'ふりかけおやき',
        '鯖缶のトマト煮',
        'ツナ入りポテトサラダ',
        'マカロニのミルクスープ',
        '米粉の台湾カステラ',
        'レンジで簡単バナナケーキ',
        '豚のとろとろ煮物',
        'なすとにべのミルクあんかけ',
        'ブロッコリーと鶏むね肉のだし煮',
        '小松菜とバナナのミルクプリン',
        'あげないかぼちゃコロッケ',
        '枝豆とブロコリーのミルクドリア',
        'コーン豆腐ハンバーグ',
        '豆腐とブロッコリーの青のりオムレツ',
        'かぶとつなのレンジスープ',
    ];

    public static function foodName()
    {
        return static::randomElement(static::$foodNames);
    }

    
}

class ImageFakerProvider extends Base {

    protected static $recipeImages = [
        '2023-05-31EOuIKmkx8WGPS1F.jpg',
        '2023-05-31El5YInDnnM4wbDn.jpg',
        '2023-05-31GEferH5RxwXa7GP.jpg',
        '2023-05-31mVEzjIjgCb8AK6u.jpg',
        '2023-05-31O3a9TFX9Iv6mFxH.jpg',
        '2023-05-31PUjhSqWqJjlYIlQ.jpg',
        '2023-05-31rkchqq9hPJUDRJy.jpg',
        '2023-05-31SX2dbKw0oqW1c1b.jpg',
        '2023-05-31WCBbPq9uavj6oGa.jpg',
        '2023-05-31yTzOM5wgl0xmIDd.jpg',
        '2023-05-31z5htyKAoOlLgx9r.jpg',
        '2023-05-311FELS3SZNwbBXot.jpg',
        '2023-05-314esJMmx7a3AdMNf.jpg',
        '2023-05-31cNj3iaOi7Gq8xUZ.jpg',
        '2023-05-31BAmFtz7cRMBzVSj.jpg',
        '2023-05-31aQDkFqSc3LV7c8b.jpg'
    ];
    
    public static function recipeImage()
    {
        return static::randomElement(static::$recipeImages);
    }

}


class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    public function definition()
    {
        $this->faker->addProvider(new JapaneseFakerProvider($this->faker));
        $this->faker->addProvider(new ImageFakerProvider($this->faker));

        return [
            'title' => JapaneseFakerProvider::foodName(),
            'ingredient_category_id' => $this->faker->numberBetween(1, 15),
            'cal' => $this->faker->numberBetween(100, 1000),
            'time' => $this->faker->numberBetween(10, 60),
            'price' => $this->faker->randomFloat(2, 5, 50),
            'filename' => ImageFakerProvider::recipeImage(),
        ];
    }
}
