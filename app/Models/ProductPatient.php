<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPatient extends Model
{
    protected $table = 'patient_product';

    protected $fillable = [
        'id_product',
        'id_patient'
    ];
    
}
