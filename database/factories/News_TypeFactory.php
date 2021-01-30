<?php

namespace Database\Factories;

use App\Models\News_Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class News_TypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News_Type::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'category_id'=> 41, 
            'name'=>$this->faker->name,
            'status'=>$this->faker->numberBetween(0,1)

        ];
    }
}
