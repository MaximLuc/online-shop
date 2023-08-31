<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'contetn'=>$this->faker->text(50),
            'news_id' => $this->faker->numberBetween(1,7)
        ];
    }
}
