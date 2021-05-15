<?php

namespace App\Models\locatization;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    use HasFactory;
    protected $table = 'provincia';
    protected $fillable=['nombre_provincia'];

    public function ciudad()
    {
        return $this->hasMany('App\Models\locatization\ModelCiudad');
    }
   
}
