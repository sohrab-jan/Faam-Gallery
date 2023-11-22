<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Classic-Framing-Services', 'image' => 'assets/img/Services Icon/Classic-Framing-Services.jpg'],
            ['title' => 'Box-Framing-Services', 'image' => 'assets/img/Services Icon/Box-Framing-Services.jpg'],
            ['title' => 'Tray-or-Box-Framing-Services', 'image' => 'assets/img/Services Icon/Tray-or-Box-Framing-Services.jpg'],
            ['title' => 'Floating-Box-Framing-Services', 'image' => 'assets/img/Services Icon/Floating-Box-Framing-Services.jpg'],
            ['title' => 'Memorabilia-Framing-Services', 'image' => 'assets/img/Services Icon/Memorabilia-Framing-Services.jpg'],
            ['title' => 'Canvas-Stretching-Services', 'image' => 'assets/img/Services Icon/Canvas-Stretching-Services.jpg'],
            ['title' => 'Glazing-Services', 'image' => 'assets/img/Services Icon/Glazing-Services.jpg'],
            ['title' => 'Mirrors-Services', 'image' => 'assets/img/Services Icon/Mirrors-Services.jpg'],
            ['title' => 'Packaging-Services', 'image' => 'assets/img/Services Icon/Packaging-Services.jpg'],
            ['title' => 'Giclee-Printing--Services', 'image' => 'assets/img/Services Icon/Giclee-Printing--Services.jpg'],
            ['title' => 'Canvas-Printing-Services', 'image' => 'assets/img/Services Icon/Canvas-Printing-Services.jpg'],
            ['title' => 'Poster-Printing-Services', 'image' => 'assets/img/Services Icon/Poster-Printing-Services.jpg'],
            ['title' => 'Photo-Editing-Services', 'image' => 'assets/img/Services Icon/Photo-Editing-Services.jpg'],
            ['title' => 'Oil-Painting-Cleaning-&-Restoration-Services', 'image' => 'assets/img/Services Icon/Oil-Painting-Cleaning-&-Restoration-Services.jpg'],
            ['title' => 'Business-Card-Printing-Services', 'image' => 'assets/img/Services Icon/Business-Card-Printing-Services.jpg'],
            ['title' => 'Hanging-Services', 'image' => 'assets/img/Services Icon/Hanging-Services.jpg'],
        ];
        foreach ($data as $value) {
            Service::create([
                'title' => $value['title'],
                'image' => $value['image'],
            ]);
        }
    }
}
