<?php

namespace Database\Seeders;

use App\Models\CmsPage;
use Illuminate\Database\Seeder;

class CmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cmsPagesRecords = [
            ['id' => 1, 'title' => 'About Us', 'description' => 'Content coming soon', 'url' => 'about-us
                ', 'meta_title' => 'About Us', 'meta_description' => 'About Us Content', 'meta_keywords' => 'about us, about', 'status' => 1],
            ['id' => 2, 'title' => 'Terms & Conditions', 'description' => 'Content coming soon', 'url' => 'Terms-Conditions
                ', 'meta_title' => 'Terms & Conditions', 'meta_description' => 'Terms & Conditions Content', 'meta_keywords' => 'about us, about', 'status' => 1],
            ['id' => 3, 'title' => 'Privacy & Policy', 'description' => 'Content coming soon', 'url' => 'Privacy-Policy
                ', 'meta_title' => 'Privacy & Policy', 'meta_description' => 'Privacy & Policy Content', 'meta_keywords' => 'privacy & policy', 'status' => 1],
        ];
        CmsPage::insert($cmsPagesRecords);
    }
}
