<?php

namespace App\Models\locatization;

use App\Models\Admin\ModelUbicacion;
use App\Models\ModelDepartamento;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    use HasFactory;
    protected $table = 'provincia';
    protected $fillable=[
        'id_provincia,
        nombre_provincia'
    ];

    public function departamento(){
        return $this->hasMany(ModelDepartamento::class);
    }

    public function ciudades(){
        return $this->hasMany(ModelCiudad::class,'id_ciudad');
    }
}
