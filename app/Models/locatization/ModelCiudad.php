<?php

namespace App\Models\locatization;

use App\Models\Admin\ModelUbicacion;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCiudad extends Model
{
    use HasFactory;

    protected $table = 'ciudad';
    protected $fillable=[
        'nombre_ciudad',
        'id_provincia'];

    public static function  ciudad($id_provincia)
    {
        return ModelCiudad::where('id_provincia','=',$id_provincia)->get();
        //return $this->belongsTo('App\Models\locatization\ModelCiudad');
    }

    public function ubicacion(){
        return $this->hasOne(ModelUbicacion::class,'id_ubicacion');
    }

    public function provincia(){
        return $this->belongsTo(provincia::class,'id_ciudad','id_ciudad');
    }

    public function departamento(){
        return $this->hasMany(ModelDepartamento::class);
    }
}
