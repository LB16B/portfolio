<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IngredientCategory;
use App\Models\AgeMonthCategory;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'ingredient_category_id',
        'age_month_category_id',
        'cal',
        'time',
        'price',
        'filename',
    ];

    public function ingredientCategory()
    {
        return $this->belongsTo(IngredientCategory::class, 'ingredient_category_id');
    }

    public function ageMonthCategory()
    {
        return $this->belongsTo(AgeMonthCategory::class, 'age_month_category_id');
    }
}