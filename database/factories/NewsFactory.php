<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'news_type_id'=> 6,
            'user_id'=> 1,
            'tieu_de'=>$this->faker->text,
            'tom_tat'=>$this->faker->text,
            'noi_dung'=>$this->faker->text,
            'url_img'=>$this->faker->url,
            'ngay'=>$this->faker->date,
            'so_lan_xem'=>$this->faker->numberBetween(0,50),
            'tin_noi_bat'=>$this->faker->numberBetween(0,1),
            'so_luot_like'=>$this->faker->numberBetween(0,300)
        ];
    }
}
