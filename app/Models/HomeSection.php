<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSection extends Model
{
    use HasFactory;
    public function homepage()
    {
        return $this->belongsTo(HomePage::class, 'home_id', 'id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
