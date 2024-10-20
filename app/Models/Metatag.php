<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metatag extends Model
{
    use HasFactory;

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
    public function homepage()
    {
        return $this->belongsTo(HomePage::class, 'home_id', 'id');
    }
    public function blog()
    {
        return $this->belongsTo(Blog::class, 'blogs_id', 'id');
    }
    public function about()
    {
        return $this->belongsTo(About::class, 'about_id', 'id');
    }
    public function contact()
    {
        return $this->belongsTo(Contactpage::class, 'contact_id', 'id');
    }
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }
}
