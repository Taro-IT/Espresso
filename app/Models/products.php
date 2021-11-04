<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{

    protected $table = 'product';

    protected $fillable = [
        'id_workshop',
        'title',
        'description',
        'price',
        'id_patient',
        'image',
    ];




}
