<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder
{
    public function run()
    {
        Artist::create([
            'first_name' => 'Marziyeh',
            'last_name' => 'Ramezani',
            'email' => 'Marziyeh.Ramezani@gmail.com',
            'city' => 'London',
            'phone' => '+1121221',
        ]);
    }
}
