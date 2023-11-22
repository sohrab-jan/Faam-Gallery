<?php

namespace Database\Factories;

use App\Models\Artist;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'size' => $this->faker->word(),
            'width' => $this->faker->numberBetween(10, 100),
            'height' => $this->faker->numberBetween(10, 100),
            'product_short_des' => $this->faker->word(),
            'product_long_des' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(100, 10000),
            'artist_id' => Artist::factory(),
            'category_id' => Category::factory(),
            'image' => $this->faker->imageUrl,
            'slug' => $this->faker->slug(),
            'quantity' => $this->faker->numberBetween(10, 100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
