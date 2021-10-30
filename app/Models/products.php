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
        'price'
    ];

    public static function obtainProductInfo(){

        $registers = self::select(
                                'product.id as id',
                                'product.title as title',
                                'product.description as description',
                                'product.price as price',
                                'product.image as image',
                                'workshop.id as id_workshop',
                                'workshop.name as workshop_name',
                                'patient.id as id_patient',
                                'patient.name as patient_name'
                                )
                                ->join('workshop','product.id_workshop','id_workshop')
                                ->join('patient_product','product.id','patient_product.id_product')
                                ->join('patient','patient_product.id_patient','patient.id')
                                ->where([
                                    ['product.id_workshop','=','workshop.id'],
                                ])
                                ->get();            
        return $registers->toArray();
              
    }

}
