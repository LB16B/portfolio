<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;
use App\Models\ageMonthCategory;


class IngredientCategory extends Model
{
    use HasFactory;

        protected $fillable = [
        'name',
    ];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    public function ageMonthCategory()
    {
        return $this->belongsTo(AgeMonthCategory::class);
    }
}