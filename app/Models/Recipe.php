<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IngredientCategory;
use App\Models\AgeMonthCategory;
use App\Models\Manual;
use App\Models\PaidMember;
use App\Models\Ingredient;
use App\Models\Like;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'paid_member_id',
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

    public function manual()
    {
        return $this->hasOne(Manual::class);
    }

    public function ingredient()
    {
        return $this->hasOne(Ingredient::class);
    }

    public function paid_member()
    {
        return $this->hasOne(PaidMember::class);
    }


    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isLiked($paid_member_id)
    {
        return $this->likes()->where('paid_member_id', $paid_member_id)->exists();
    }
}