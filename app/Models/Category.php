<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',        
    ];

    public function products():object
    {
        //Indica que la categoría tiene mucho productos Cuantos
        return $this->hasMany(Product::class);
    }

    // public function getImageAttribute($image):string
    // {
    //     if($image == null)        
    //         return 'categories-svgrepo-com.svg';

    //     if(file_exists('storage/categories/' . $image))            
    //         return $image;
    //     else
    //         return 'categories-svgrepo-com.svg';
        
    // }
}
