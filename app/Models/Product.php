<?php

namespace App\Models;



use App\Models\Categorie;
use Illuminate\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;



    public function categorie(): BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

}
