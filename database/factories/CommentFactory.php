<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'news_id' => 2,
            'user_id' => 1,
            'date'=> $this->faker->date,
            'content'=> $this->faker->text,
            'status'=> $this->faker->numberBetween(0,1),
        ];
    }
}
