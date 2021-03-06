<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['people_id', 'membership_id', 'valid_from', 'valid_to', 'balance', 'status'];

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    public function check_ins()
    {
        return $this->hasMany(CheckIn::class);
    }
}
