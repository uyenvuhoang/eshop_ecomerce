<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'category_id' =>$this->faker->randomElement(['1','2', '3']),
            'name' =>$this->faker->name(),
            'slug' =>$this->faker->slug(),
            'brand' =>$this->faker->randomElement(['Apple','SamSung', 'Oppo']),
            'small_description' =>$this->text($maxNbChars = 300),
            'description' =>$this->paragraph(),
            'original_price' => $this->numberBetween(1000, 3000),
            'selling_price' => $this->randomDigit(1000,2800),
            'trending' => $this->faker->randomElement(['true','false']),
            'featured' => $this->faker->randomElement(['true','false']),
            'status' => $this->faker->randomElement(['true','false']),
            'meta_title' => $this->faker->text($maxNbChars = 50),
            'meta_keyword' => $this->faker->text($maxNbChars = 50),
            'meta_description' => $this->faker->text($maxNbChars = 300),
            // 'image' => $this->faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
