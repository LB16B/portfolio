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

class RecipeFactory extends Factory
{
    protected $model = Recipe::class;

    public function definition()
    {
        $this->faker->addProvider(new JapaneseFakerProvider($this->faker));

        return [
            'title' => JapaneseFakerProvider::foodName(),
            'ingredient_category_id' => $this->faker->numberBetween(1, 15),
            'cal' => $this->faker->numberBetween(100, 1000),
            'time' => $this->faker->numberBetween(10, 60),
            'price' => $this->faker->randomFloat(2, 5, 50),
        ];
    }
}
