<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
    function metatag()  {
        return $this->hasOne(Metatag::class , 'home_id');
    }
    function herosection()  {
        return $this->hasOne(HomeSection::class , 'home_id');
    }
    function trustedarea()  {
        return $this->hasOne(CounterArea::class , 'home_id');
    }
    function USPs()  {
        return $this->hasMany(Usp::class , 'home_id');
    }
}
