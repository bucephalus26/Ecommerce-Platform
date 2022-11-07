<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //One to Many
    // Category table has relations with many products
    // Create hasMany relation
    public function products(){
        return $this->hasMany(Product::class);
    }

}
