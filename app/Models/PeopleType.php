<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleType extends Model
{
    use HasFactory;

    protected $fillable = ['type'];

    public function people()
    {
        return $this->hasMany(People::class, 'people_type');
    }
}
