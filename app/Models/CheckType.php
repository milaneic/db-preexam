<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckType extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function chek_ins()
    {
        return $this->hasMany(CheckIn::class, 'check_type');
    }
}
