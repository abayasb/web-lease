<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    protected $table = 'provincia';
    protected $fillable=['nombre_provincia'];
   
}
