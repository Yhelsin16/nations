<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //La tabla con la cual el modelo se relaciona
    protected $table = "countries";
    //La clave primaria de la tabla
    protected $primaryKey = "country_id";
    //Anular campos de auditoria
    public $timestamps = false;
    use HasFactory;

    //relaciona inversa M:1 paises y region
    public function region(){
        return $this->belongsTo(Region::class, 'region_id');
    }
}
