<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // One to Many
    // Category table has relations with many products
    // Create hasMany relation
    public function products(){
        return $this->hasMany(Product::class);
    }
    //one to many inverse
    public function parent()
    {
        return $this->belongsTo( related: Catergory::class, foreignKey: 'parent_id');
    }
    //One to many
    public function children(){
        return $this->hasMany(related: Category::class, foreignKey: 'parent_id');
    }

    // One to Many inverse
    // parent category has many subcategories
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // One to Many 
    // each child category has one parent category
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}
