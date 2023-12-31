<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name=$this->faker->unique()->words($nb=4,$asText=true);
        $product_slug=Str::slug($product_name);
        
        return [
            'name'                          =>$product_name,
            'slug'                          =>$product_slug,
            'short_description'             =>$this->faker->text(200),
            'description'                   =>$this->faker->text(500),
            'regular_price'                 =>$this->faker->numberBetween(100,50000),
            'SKU'                           =>'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock_status'                  =>'instock',
            'quentity'                      =>$this->faker->numberBetween(100,300),
            'image'                         =>'digital_'.$this->faker->unique()->numberBetween(1,22).'jpg',
            'category_id'                   =>$this->faker->numberBetween(1,7)
        ];
    }
}
