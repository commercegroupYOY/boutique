<?php

namespace App\Models;


use Illuminate\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Categorie;

class Product extends Model
{
    use HasFactory;

  

    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }
    
}
