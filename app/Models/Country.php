<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     //la tabla a conectar 
     protected $table = "countries";
     // la clave primaria de esa tabla
     protected $primaryKey = "country_id";
     //omitir campos de auditoria
     public $timestamps= false;
    use HasFactory;

    //M to M Country and Language relationship

    public function languages(){
        //belongsToMany Mehthod:
        //1. Related Model
        //2. pivot table(intermediate table)
        //3. Foreign Key current model
        //4. Foreign Key of related model
        return $this->belongsToMany(Language::class , 'country_languages' , 'country_id' , 'language_id');
    }

    //M:1 country - region relationship

    public function regions(){

        //BelongsTo method:
        //1. Related model
        //2. Foreign key related model in current model

    return $this->belongsTo(Region::class, 'region_id');
    }
}
