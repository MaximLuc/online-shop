<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\News;
class NewsFactory extends Factory
{
    protected $model =News::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $news_name = $this->faker->unique()->words($nb=2,$asText=true);
        return [
            'name'=> $news_name,
            'short_description'=>$this->faker->text(100),
            'description'=>$this->faker->text(200)
        ];  
    }
}
