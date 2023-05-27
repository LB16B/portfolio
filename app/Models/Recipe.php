<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IngredientCategory;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'ingredient_category_id',
    ];

    public function ingredientCategory()
    {
        return $this->belongsTo(IngredientCategory::class, 'ingredient_category_id');
    }
}
