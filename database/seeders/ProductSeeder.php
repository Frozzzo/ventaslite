<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'LARAVEL Y LIVEWIRE',
            'cost' => 100000,
            'price' => 200000,
            'barcode' => '1515ADASDASD1',
            'stock' => 50,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png'
        ]);

        Product::create([
            'name' => 'FILA',
            'cost' => 100000,
            'price' => 200000,
            'barcode' => '56454FFAA',
            'stock' => 50,
            'alerts' => 5,
            'category_id' => 2,
            'image' => 'fila.png'
        ]);

        Product::create([
            'name' => 'VIVO',
            'cost' => 750000,
            'price' => 850000,
            'barcode' => 'KLAPP123688',
            'stock' => 50,
            'alerts' => 20,
            'category_id' => 3,
            'image' => 'vivo-y51.png'
        ]);

        Product::create([
            'name' => 'XIAOMI REDMI NOTE 8',
            'cost' => 780000,
            'price' => 910000,
            'barcode' => '41241ADADAD',
            'stock' => 50,
            'alerts' => 20,
            'category_id' => 3,
            'image' => 'vivo-y51.png'
        ]);

        Product::create([
            'name' => 'LENOVO IDEAPAD 3 GAMING',
            'cost' => 2500000,
            'price' => 3200000,
            'barcode' => 'JLJOPP098',
            'stock' => 50,
            'alerts' => 20,
            'category_id' => 3,
            'image' => 'vivo-y51.png'
        ]);
    }
}
