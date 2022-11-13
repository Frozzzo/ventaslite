<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'CURSOS',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',            
        ]);

        Category::create([
            'name' => 'TENIS',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',            
        ]);

        Category::create([
            'name' => 'CELULARES',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',            
        ]);
        
        Category::create([
            'name' => 'COMPUTADORAS',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',            
        ]);
    }
}
