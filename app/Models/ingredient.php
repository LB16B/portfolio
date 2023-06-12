<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;

class ingredient extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'ingredient1',
        'ingredient2',
        'ingredient3',
        'ingredient4',
        'ingredient5',
        'ingredient6',
        'ingredient7',
        'ingredient8',
        'amount1',
        'amount2',
        'amount3',
        'amount4',
        'amount5',
        'amount6',
        'amount7',
        'amount8',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
