<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $image = UploadedFile::fake()->image('service_image.jpg');

        return [
            'title' => $this->faker->sentence,
            'image' => Storage::disk('public')->putFile('services', $image),
            'is_active' => $this->faker->boolean,
        ];
    }
}
