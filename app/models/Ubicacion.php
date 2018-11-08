<?php

namespace hoteles\models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table='ubicaciones';
    protected $primaryKey='id';

    public $timestamps=false;


    protected $fillable =[
        'nombre',
    ];
    
    protected $guarded =[
    ];
}
