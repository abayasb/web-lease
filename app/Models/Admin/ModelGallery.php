<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModelGallery extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates =['deleted_at'];
    protected $table='gallery_departamento';
    protected $fillable =[
        'id_gallery',
        'id_departamento',
        'file_path',
        'file_name'
    ];

    
}
