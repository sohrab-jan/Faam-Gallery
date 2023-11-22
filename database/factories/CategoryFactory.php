<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        $name = $this->faker->name();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }

    public function withParent(Category $category = null): CategoryFactory
    {
        if (is_null($category)) {
            $category = Category::factory()->create();
        }

        return $this->state([
            'parent_id' => $category->getKey(),
        ]);
    }
}
