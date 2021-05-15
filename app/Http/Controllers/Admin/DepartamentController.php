<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\locatization\ModelCiudad;
use App\Models\locatization\ModelUniversidad;
use App\Models\locatization\provincia ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
class DepartamentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getDepartament()
    {
        return view('view-admin.departament.home');
    }
    public function getDepartamentAdd()
    {
        //$provincias = DB::table('provincia')->lists('nombre_provincia','id_provincia');
        //print_r($provincias);
        $provincias = provincia::pluck('nombre_provincia','id_provincia');
        return view('view-admin.departament.departament-add',compact('provincias'));
        //return view('view-admin.departament.departament-add');
    }

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
}
