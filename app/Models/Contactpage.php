<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactpage extends Model
{
    use HasFactory;

    function metatag()  {
        return $this->hasOne(Metatag::class , 'contact_id');
    }
}
