<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $fillable=[
        'whatsapp',
        'phone_1',
        'phone_2',
        'mobile_1',
        'mobile_2',
        'facebook',
        'instagram',
        'spotify',
        'medium',
        'email',
    ];


}
