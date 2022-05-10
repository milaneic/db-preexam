<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipTypes extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function memberships()
    {
        return $this->hasMany(Membership::class, 'membership_type');
    }
}
