<?php

namespace Database\Factories;

use App\Models\Advertisement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdvertisementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advertisement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url_img1' => $this->faker->url,
            'url_img2' => $this->faker->url,
            'start_date' => $this->faker->date,
            'end_date' => $this->faker->date,
            'description' =>  $this->faker->text,
        ];
    }
}
