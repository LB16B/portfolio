<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recipe;

class manual extends Model
{
    use HasFactory;

    protected $fillable = [
        'recipe_id',
        'manual1',
        'manual2',
        'manual3',
        'manual4',
        'manual5',
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
