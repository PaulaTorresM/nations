<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
     //la tabla a conectar 
     protected $table = "languages";
     // la clave primaria de esa tabla
     protected $primaryKey = "language_id";
     //omitir campos de auditoria
     public $timestamps= false;
     use HasFactory;
    
     public function countries(){
        return $this->belongsToMany(Country::class, 'country_languages' , 'language_id' , 'country_id');
    }
}
