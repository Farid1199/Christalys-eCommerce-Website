<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OverallReview extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'review'];
}




