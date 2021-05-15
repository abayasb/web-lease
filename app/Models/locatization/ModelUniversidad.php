<?php

namespace App\Models\locatization;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUniversidad extends Model
{
    use HasFactory;
    protected $table = 'universidad';
    protected $fillable=['nombre_unversidad','id_ciudad'];


    public static function universidad($id_ciudad)
    {
        return ModelUniversidad::where('id_ciudad','=',$id_ciudad)->get();
        //return $this->belongsTo('App\Models\locatization\ModelCiudad');
    }

}
