<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\View\View;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'idproducts';

    // $products = Product::orderBy('name');
}
