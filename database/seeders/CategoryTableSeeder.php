<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Medium', 'parent_id' => null],
            ['name' => 'Style', 'parent_id' => null],
            ['name' => 'Theme', 'parent_id' => null],

            ['name' => 'Book', 'parent_id' => 1],
            ['name' => 'Acrylic', 'parent_id' => 1],
            ['name' => 'Sculpture', 'parent_id' => 1],
            ['name' => 'Pastel', 'parent_id' => 1],
            ['name' => 'Oil Paint', 'parent_id' => 1],

            ['name' => 'Cubism', 'parent_id' => 2],
            ['name' => 'Abstract', 'parent_id' => 2],
            ['name' => 'Expressionism', 'parent_id' => 2],
            ['name' => 'Fauvism', 'parent_id' => 2],
            ['name' => 'Figurative', 'parent_id' => 2],
            ['name' => 'Fine', 'parent_id' => 2],
            ['name' => 'Futuristics', 'parent_id' => 2],
            ['name' => 'Geometric', 'parent_id' => 2],
            ['name' => 'Impressionism', 'parent_id' => 2],
            ['name' => 'Metaphysical', 'parent_id' => 2],
            ['name' => 'Minimalism', 'parent_id' => 2],
            ['name' => 'Miniature', 'parent_id' => 2],
            ['name' => 'Oriental', 'parent_id' => 2],
            ['name' => 'Pop', 'parent_id' => 2],
            ['name' => 'Realism', 'parent_id' => 2],
            ['name' => 'Semi', 'parent_id' => 2],
            ['name' => 'Surrealism', 'parent_id' => 2],
            ['name' => 'Symbolic', 'parent_id' => 2],
            ['name' => 'Vintage', 'parent_id' => 2],
            ['name' => 'Other', 'parent_id' => 2],

            ['name' => 'All Themes', 'parent_id' => 3],
            ['name' => 'Still Life', 'parent_id' => 3],
            ['name' => 'Landscape', 'parent_id' => 3],
            ['name' => 'Portraiture', 'parent_id' => 3],
            ['name' => 'Nature', 'parent_id' => 3],
            ['name' => 'Abstraction', 'parent_id' => 3],
            ['name' => 'Conceptual', 'parent_id' => 3],
            ['name' => 'Pop culture', 'parent_id' => 3],
            ['name' => 'Marine', 'parent_id' => 3],
            ['name' => 'Provocative', 'parent_id' => 3],
            ['name' => 'Religion', 'parent_id' => 3],
            ['name' => 'Street Art', 'parent_id' => 3],
            ['name' => 'Nude', 'parent_id' => 3],
            ['name' => 'Fantasy', 'parent_id' => 3],
            ['name' => 'Digital', 'parent_id' => 3],
            ['name' => 'Historical and Political', 'parent_id' => 3],
            ['name' => 'Animals', 'parent_id' => 3],
            ['name' => 'Architecture', 'parent_id' => 3],
            ['name' => 'Calligraphy', 'parent_id' => 3],
            ['name' => 'Other', 'parent_id' => 3],
        ];
        foreach ($data as $value) {
            Category::create([
                'name' => $value['name'],
                'slug' => Str::slug($value['name']),
                'parent_id' => $value['parent_id'],
            ]);
        }
    }
}
