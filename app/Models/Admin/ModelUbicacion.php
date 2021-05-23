<?php

namespace App\Models\Admin;

use App\Models\locatization\ModelCiudad;
use App\Models\locatization\ModelUniversidad;
use App\Models\locatization\provincia;
use App\Models\ModelDepartamento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUbicacion extends Model
{
    use HasFactory;

    protected $table = 'ubicacion';

    protected $fillable = [
        'id_ubicacion',
        'id_provincia',
        'id_ciudad',
        'id_universidad'
    ];


    public function departamentos()
    {
        # code...
        return $this->hasMany(ModelDepartamento::class,'id_ubicacion');
    }
    public function provincia()
    {
        return $this->belongsTo(provincia::class,'id_provincia','id_provincia');
    }

    public function ciudad()
    {
        # code...
        return $this->belongsTo(ModelCiudad::class,'id_ciudad','id_ciudad');
    }
    public function universidades()
    {
        # code...
        return $this->belongsTo(ModelUniversidad::class,'id_universidad','id_universidad');
    }
}
