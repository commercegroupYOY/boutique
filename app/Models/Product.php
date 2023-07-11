<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'picture_url_yoy', 'price', 'discount', 'weight', 'description', 'quantity', 'sell', 'category', 'created_at'];
}
