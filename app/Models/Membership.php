<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = ['people_id', 'membership_type', 'start_date', 'end_date', 'status'];

    public function membership_type()
    {
        return $this->belongsTo(MembershipTypes::class);
    }

    public function person()
    {
        return $this->belongsTo(People::class, 'people_id');
    }
}
