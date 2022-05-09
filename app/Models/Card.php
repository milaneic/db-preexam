<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['membership_id', 'balance', 'status'];

    public function memberships()
    {
        return $this->belongsTo(Membership::class);
    }

    public function check_ins()
    {
        return $this->hasMany(CheckIn::class);
    }
}
