<?php

namespace App\Models;

use App\Models\Admin\ModelUbicacion;
use App\Models\locatization\ModelCiudad;
use App\Models\locatization\provincia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelDepartamento extends Model
{
    use HasFactory;
    protected $table = 'departamento';

    protected $fillable =[
        'id_departamento',
        'direccion',
        'descripcion',
        'precio',
        'id',
        'id_provincia'
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User','id','id');
    }

    public function provincias(){
        return $this->belongsTo('App\Models\locatization\provincia','id_provincia','id_provincia');
    }
    
    public function ciudades(){
        return $this->belongsTo(ModelCiudad::class,'id_ciudad','id_ciudad');
    }
}
