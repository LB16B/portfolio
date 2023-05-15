<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaidMember;

class PaidMemberProfile extends Model
{
    use HasFactory;

    public function paid_member()
    {
        return $this->belongsTo(PaidMember::class);
    }
}
