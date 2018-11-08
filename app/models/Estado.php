<?php

namespace hoteles\models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table='estados';
    protected $primaryKey='id';

    public $timestamps=false;


    protected $fillable =[
        'nombre',
    ];
    
    protected $guarded =[
    ];
}
