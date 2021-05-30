<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Admin\ModelGallery;
use App\Models\Admin\ModelUbicacion;
use App\Models\ModelDepartamento;
use App\Models\User;
use App\Models\locatization\provincia;
use App\Models\locatization\ModelCiudad;
use App\Models\locatization\ModelUniversidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class viewController extends Controller
{
    
    public function ciudades(Request $request,$id_provincia)
    {
        
        if ($request->ajax()) {
            # code...
            $ciudad = ModelCiudad::ciudad($id_provincia);
            return response()->json($ciudad); 
        }
    }

    public function universidades(Request $request,$id_ciudad)
    {
        if ($request->ajax()) {
            # code...
            $universidad = ModelUniversidad::universidad($id_ciudad);
            return response()->json($universidad); 
        }
    }

    public function getDepartament()
    {
        $user = User::get();
        $departamento = ModelDepartamento::get();
        $provincias = provincia::pluck('nombre_provincia','id_provincia');
        //return $departamento;
        //return compact('user','provincias','departamento');
        return view('indexWelcome',compact(['user'=>'user','provincias'=>'provincias','departamento'=>'departamento']));
    }

    public function descripcion($identicador)
    {
        $user = User::get();
        $departamento = ModelDepartamento::where('id_departamento',$identicador)->first();
        $galleria = DB::select('select file_path,file_name from gallery_departamento where id_departamento = ?', [$identicador]);
        //return $galleria;
        return view('description-general',compact('departamento',$user,'galleria'));
        
    }
}
