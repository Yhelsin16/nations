<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "continents";
    //La clave primaria de la tabla
    protected $primaryKey = "continent_id";
    //Anular campos de auditoria
    public $timestamps = false; 
    use HasFactory;

    //relacion entre continente y region por medio de un metodo
    public function regiones(){
        return $this->hasmany( Region::class , 'continent_id' );
        
    }
}
