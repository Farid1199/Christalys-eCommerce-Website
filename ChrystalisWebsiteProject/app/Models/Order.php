<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $table = 'orders';
    protected $fillable = ['user_id', 'address_id', 'customer_id', 'session_id', 'total_price', 'paid'];
}
