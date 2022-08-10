<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class continent extends Model
{
    //la tabla a conectar 
    protected $table = "continents";
    // la clave primaria de esa tabla
    protected $primaryKey = "continent_id";
    //omitir campos de auditoria
    public $timestamps= false;
    use HasFactory;

    //relacion entre continente y sus regiones

    public function regiones(){
        //Parameters
        //1. Linked Model
        //2. Foreign Key of current model into related region model
        return $this-> hasMany(Region::class,
        'continent_id');
    }
    //Relacion entre continente y paises
    //continent: abuelo
    //region: papá
    //country: nieto

    public function paises(){
        //Parameters
        //1- Nieto
        //2- papa
        //3- FK del abuelo en el papa
        //4 FK del papa en el nieto
        return $this-> hasManyThrough(Country::class , Region::class , 'continent_id', 'region_id',);
    }
}
