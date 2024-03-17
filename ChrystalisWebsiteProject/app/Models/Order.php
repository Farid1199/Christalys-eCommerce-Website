<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'orders'; // Explicitly defining the table name (optional if the table name matches the Laravel naming convention)
    
    // Specify the primary key
    protected $primaryKey = 'order_id';
    
    // If 'order_id' is an auto-incrementing integer, these are the default values and can be omitted
    // but it's good practice to define them explicitly when you're customizing the primary key
    public $incrementing = true;
    protected $keyType = 'int';
    
    protected $fillable = ['user_id', 'address_id', 'customer_id', 'session_id', 'total_price', 'paid'];

    // Rest of your model...
}
