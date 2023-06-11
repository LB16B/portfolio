<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\Manual;
use Faker\Provider\Base;
// use Database\Factories\JapaneseFakerProvider as FactoriesJapaneseFakerProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManualFakerProvider extends Base
{
    protected static $manual1 = [
        '豆腐をゆでて潰し、器に盛ります。',
        '食パンはトーストし、耳を取り、細かくちぎって鍋に入れます。',
        '凍ったままのたまねぎみじん切りを耐熱容器に入れ、水（大さじ1）を加え、ふんわりラップをして電子レンジ（600W）で1分半加熱する。',
        'うどんをすり鉢ですりつぶします。',
        '星のふは水にひたし、水けをしぼってみじん切りにする。',
        '耐熱容器にバナナを入れ、ふんわりラップをして電子レンジ（600W）で30秒加熱する。',
        '解凍して水けをふいた白身魚と水（大さじ1）を耐熱容器に入れ、ふんわりラップをして電子レンジ（600W）で30秒加熱し、皮をとりすりつぶす。',
        '耐熱容器に冷凍ほうれん草、水（大さじ1）を入れ、ふんわりラップをして途中混ぜながら電子レンジ（600W）で2分加熱し、そのまま1分蒸らす。細かく切ってすりつぶす。',
        '冷凍さつまいもスティックは耐熱容器に入れ、電子レンジ（600W）で約10秒加熱し、皮を取って小さく切る。',
    ];

    public static function manual1()
    {
        return static::randomElement(static::$manual1);
    }

    protected static $manual2 = [
        'いんげん、にんじん、しいたけ、じゃがいもをやわらかくなるまでゆで、細かく切ります。',
        '(1)に凍ったままのかぼちゃを加え、ふんわりラップをして、途中混ぜながら、かぼちゃがやわらかくなるまで電子レンジで4分ほど加熱する。かぼちゃをつぶして混ぜる。',
        '白菜は5mm角くらいに切り、人参は薄いせん切りにする。',
        '解凍した『さつまいものうらごし』に水（大さじ1と1/3）、牛乳を加え煮る。',
        '凍ったままの冷凍ブロッコリーは耐熱容器に入れ、ラップをして途中むきを変えながら、電子レンジ（600W）で1分～1分10秒加熱する。キッチンばさみで5mm大に切る。',
        '解凍して水けをふいた鶏肉は皮と脂を取り除き、3～4mm大に切り、片栗粉をまぶす。大根の葉は細かくきざむ。',
        '凍ったままの黄キューブは耐熱容器に入れ、ラップをして電子レンジ（600W）で30秒加熱して混ぜる。ラップを外して30秒加熱して水分を飛ばし、水溶き片栗粉（小さじ1/2）を混ぜ、さらに20秒加熱して混ぜる。',
        '小鍋に湯（1～2カップ）を沸かす。キャベツを3cm大に切って入れ、やわらかくなるまで12～13分煮る。ゆで汁は1/4カップとりおく。',
        'キャベツをみじん切りにして鍋にもどし、ゆで汁と(1)を入れ、1～2分煮る。食べやすくつぶす。',
    ];

    public static function manual2()
    {
        return static::randomElement(static::$manual2);
    }

    protected static $manual3 = [
        '鍋に水30ml(大さじ2杯)と(2)、豚ひき肉、しょうゆ、砂糖を入れて豚ひき肉に火が通るまで煮込みます。',
        '(2)に豆乳グルトを混ぜる。',
        '油で(1)、解凍した鶏ササミひき肉を炒めてしんなりしたら、スープを加え薄味に調味し、弱火で8～10分蒸し煮にして水溶き片栗粉でとろみを付ける。',
        '(1)に納豆、水（小さじ2）、しょうゆを加えて混ぜる。',
        '大根はすりおろし、軽く汁をきって耐熱容器に入れ、ラップをして電子レンジ（600W）で1分加熱する。',
        '食パンは1cm大に切る。',
        '鍋に凍ったままのうらごしコーンと水（1/2カップ）を入れて火にかけ、コーンを溶かす。',
        '凍ったままのかれいと水（小さじ2）を耐熱容器に入れる。ふんわりラップをして、電子レンジ（600W）で20秒加熱し、水けをきる。すりつぶして、昆布だしを加え混ぜる。',
        '耐熱容器にしらすを入れ、全体が浸るくらい湯をかけて2分ほどおき、塩を抜く。',
    ];

    public static function manual3()
    {
        return static::randomElement(static::$manual3);
    }

    protected static $manual4 = [
        '(3)に水溶き片栗粉を入れ、とろみをつけます。',
        'おとな用に塩・こしょうを加え混ぜ、味を調える。',
        '別の耐熱容器に凍ったままの『ちーちゃいうどん』（1玉）を入れ、ラップをして電子レンジで1分40秒加熱し、そのまま2分蒸らす。水洗いして2/3玉を取り分け、キッチンばさみで長さ1cmほどに切り、(2)をのせる。',
        '(2)に(1)を入れ、再びラップをして電子レンジで30秒加熱して混ぜ、さらにラップをして30秒加熱し、軟飯にのせ、しょうゆをかける。',
        '耐熱容器に(1)と凍ったままの「うらごしえだまめ」、水（大さじ3）を加え、ふんわりラップをして電子レンジ（600W）で1分加熱し、つぶしながら混ぜる。',
        'おとな用は水（1カップ）、鶏ガラスープの素を入れて、煮立ったら水溶き片栗粉でとろみを付け、溶き卵を加える。味を見て塩で味を調えたり、こしょうをふっても。',
        '食べやすくつぶした10倍がゆに(1)をのせる',
        '湯をきり、水（大さじ1）を加えてふんわりラップをして、電子レンジ（600W）で30秒加熱する。',
        '別の耐熱容器に凍ったままの緑キューブを入れ、ラップをして30秒加熱して、水溶き片栗粉（小さじ1/4）を加え混ぜる。ラップを外してさらに20秒加熱して混ぜる。',
    ];

    public static function manual4()
    {
        return static::randomElement(static::$manual4);
    }

    protected static $manual5 = [
        '(1)に(4)をかけます。',
        '水けをきってすり鉢ですりつぶし、水（小さじ1/2）を加えて混ぜる。',
        'つぶした10倍がゆを器に盛り、スプーンや竹串を使って(1)、(2)でかぼちゃや模様を描く。',
        '(1)にチーズをちぎってのせて(2)をかけ、ふんわりラップをして1分加熱する。',
        'フライパンに油を熱して(3)を大さじ1ずつ落とし、両面を1～2分ずつ焼く。',
        '軟飯を器に盛り、(3)をかける。',
        '',
        '',
        '',
    ];

    public static function manual5()
    {
        return static::randomElement(static::$manual5);
    }

}

class ManualFactory extends Factory
{
    protected $model = Manual::class;

    public function definition()
    {
        $this->faker->addProvider(new ManualFakerProvider($this->faker));

        return [
            'recipe_id' => $this->faker->numberBetween(1, 1000),
            'manual1' => ManualFakerProvider::manual1(),
            'manual2' => ManualFakerProvider::manual2(),
            'manual3' => ManualFakerProvider::manual3(),
            'manual4' => ManualFakerProvider::manual4(),
            'manual5' => ManualFakerProvider::manual5(),
        ];
    }
}
