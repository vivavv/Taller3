<?php

namespace hoteles\models;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table='propiedades';
    protected $primaryKey='id';

    public $timestamps=false;


    protected $fillable =[
        'nombre',
        'id_ubicacion',
        'nombre_ubicacion',
        'estado',
        'id_estado',
        'precio',
        'ruta',
        'descripcion'
    ];
    
    protected $guarded =[
    ];
}
