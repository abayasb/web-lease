<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelDepartamento;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getGallery()
    {
        # code...
        $departament = ModelDepartamento::get();
        return view('view-admin.departament.departament-gallery',compact('departament'));
    }

    public function getGalleryAdd($id_departamento, Request $request)
    {
        $departament = ModelDepartamento::where('id_departamento',$id_departamento)->first();
        
        //return $departament;
        return view('view-admin.departament.departament-gallery-add',compact('departament'));
    }
}
