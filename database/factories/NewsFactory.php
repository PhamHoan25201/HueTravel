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
            'news_type_id'=> 2,
            'user_id'=> 1,
            'tieu_de'=>$this->faker->text,
            'tom_tat'=>$this->faker->text
        ];
    }
}
