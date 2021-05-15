<?php

namespace App\Models\locatization;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCiudad extends Model
{
    use HasFactory;

    protected $table = 'ciudad';
    protected $fillable=['nombre_ciudad','id_provincia'];

    public static function  ciudad($id_provincia)
    {
        return ModelCiudad::where('id_provincia','=',$id_provincia)->get();
        //return $this->belongsTo('App\Models\locatization\ModelCiudad');
    }
}
