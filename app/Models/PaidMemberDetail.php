<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaidMember;

class PaidMemberDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'paid_member_id',
        'nick_name',
        'greeting',
        'filename',
    ];

    public function paid_member()
    {
        return $this->belongsTo(PaidMember::class);
    }
}
