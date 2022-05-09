<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'dob', 'gender', 'joined_at'];

    public $timestamps = false;

    const JOINED_AT = 'joined_at';

    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
}
