<?php

namespace App\Models\locatization;

use App\Models\Admin\ModelUbicacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUniversidad extends Model
{
    use HasFactory;
    protected $table = 'universidad';
    protected $fillable=[
        'id_universidad',
        'nombre_unversidad',
        'id_ciudad'];


    public static function universidad($id_ciudad)
    {
        return ModelUniversidad::where('id_ciudad','=',$id_ciudad)->get();
        //return $this->belongsTo('App\Models\locatization\ModelCiudad');
    }

    public function ubicacion(){
        return $this->hasMany(ModelUbicacion::class,'id_ubicacion');
    }

    public function ciudad(){
        return $this->belongsTo(ModelCiudad::class,'id_universidad','id_universidad');
    }

}
