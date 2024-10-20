<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'referrer',
        'ip_address',
        'section',
        'first_name',
        'last_name',
        'email',
        'phone',
        'message',
        'read_status',
        'mail_status',
        'status',
    ];
}
