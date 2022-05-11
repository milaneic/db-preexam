<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    use HasFactory;

    protected $fillable = ['card_id', 'check_type', 'timestamp', 'timestamp_out'];

    public function check_type()
    {
        return $this->belongsTo(CheckType::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
