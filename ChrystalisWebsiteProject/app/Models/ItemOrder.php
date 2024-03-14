<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    use HasFactory;

    protected $table = 'item_orders';
    protected $fillable = ['product_id', 'quantity', 'total_price'];
}
