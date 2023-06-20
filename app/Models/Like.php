<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaidMember;
use App\Models\Recipe;


class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'paid_member_id',
        'recipe_id'
    ];

    // public function paid_members()
    // {
    //     return $this->belongsToMany(PaidMember::class);
    // }

    // public function recipes()
    // {
    //     return $this->belongsToMany(Recipe::class);
    // }
}
