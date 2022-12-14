<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
            'type' => 'BILLETE',
            'value' => '100000',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '50000',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '20000',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '10000',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '5000',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '2000',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => '1000',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'MONEDA',
            'value' => '1000',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'MONEDA',
            'value' => '500',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'MONEDA',
            'value' => '200',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);

        Denomination::create([
            'type' => 'MONEDA',
            'value' => '50',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);  

        Denomination::create([
            'type' => 'OTRO',
            'value' => '0',
            'image' => 'https://dummyimage.com/200x150/000/1d2be3.png',  
        ]);        
    }
}
