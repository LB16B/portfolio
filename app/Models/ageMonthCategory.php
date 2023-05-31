<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;
use App\Models\IngredientCategory;

class ageMonthCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function age_recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
