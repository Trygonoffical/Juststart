<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    //     'meta_title',
    //     'meta_keyword',
    //     'meta_description',
    // ];

    function metatag()  {
        return $this->hasOne(Metatag::class , 'service_id');
    }
    function herosection()  {
        return $this->hasOne(HomeSection::class , 'service_id');
    }
}
