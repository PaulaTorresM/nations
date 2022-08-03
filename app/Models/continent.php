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
}
