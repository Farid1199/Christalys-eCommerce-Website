<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = ['id', 'name', 'price', 'category', 'description', 'gallery'];



    public function reviews()
{
    return $this->hasMany(Review::class);
}

     

    // If you don't want to use timestamps (created_at and updated_at columns)
  
}
