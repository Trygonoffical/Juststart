<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterArea extends Model
{
    use HasFactory;
    public function homepage()
    {
        return $this->belongsTo(HomePage::class, 'home_id', 'id');
    }
}
