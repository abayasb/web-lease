<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\DepartamentModel;
use App\Http\Controllers\Controller;
use App\Models\Admin\DepartamentModel as AdminDepartamentModel;
use App\Models\locatization\ModelCiudad;
use App\Models\locatization\ModelUniversidad;
use App\Models\locatization\provincia ;
use App\Models\ModelDepartamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Exception\NotSupportedException;
use Intervention\Image\Exception\NotReadableException;
use Intervention\Image\Facades\Image;

class DepartamentController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('isadmin');
        
    }

    public function getDepartament()
    {
        $departament = ModelDepartamento::get();
        return view('view-admin.departament.home',compact('departament'));
    }
    public function getDepartamentAdd()
    {
        $provincias = provincia::pluck('nombre_provincia','id_provincia');
        return view('view-admin.departament.departament-add',compact('provincias'));
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

    public function postUbicacion(Request $request)
    {    
    }

    
    public function postDepartament(Request $request)
    {
        $rules=[
            'direcction-departament'=>'required',
            'description-departament'=>'required',
            'cost'=>'required|integer|min:0|max:1000',
            '_provincia'=>'required'
        ];

        $message=[
            'direcction-departament.required'=>'Llene el campo de direccion',
            'description-departament.required'=>'Formato de correo no es valido',
            'cost.required'=>'Ingrese su contraseña',
            'cost.min'=>'El costo no puede ser negativo',
            'cost.max'=>'El costo no puede sobrepasar los 1000$',
            'cost.integer'=>'Solo se permite numero',
            '_provincia.required'=>'Seleccione una provincia',
        ];

        $validator = Validator::make($request->all(),$rules, $message);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->with('message','Se ha producido un error xD')
                        ->with('alert','danger');
        }else{
            $path ='/'.date('Y-m-d');
            $fileExt = trim($request->file('imagen')->getClientOriginalExtension());
            $upload_path = Config::get('filesystems.disks.uploads.root');
            $name = Str::slug(str_replace($fileExt,'',$request->file('imagen')->getClientOriginalName()));
            $file_name = rand(1,999).'-'.$name.'.'.$fileExt;
            
            $file_file = $upload_path.'/'.$path.'/'.$file_name;
            
            $departament = new ModelDepartamento();
            $departament->direccion=e($request->input('direcction-departament'));
            $departament->descripcion=e($request->input('description-departament'));
            $departament->precio=e($request->input('cost'));
            $departament->foto_principal=$file_name;
            $departament->id=Auth::user()->id;
            $departament->file_path = date('Y-m-d');
            $departament->id_provincia = e($request->input('_provincia'));
            $departament->id_ciudad =e($request->input('_ciudad'));
            $departament->id_universidad =e($request->input('_universidad'));
            if($departament->save()){
                if ($request->hasFile('imagen')){
                    $fl = $request->imagen->storeAs($path,$file_name,'uploads');
                    $img = Image::make($file_file);
                    $img->resize(256,256,function($constraint){
                        $constraint->upsize();
                    });
                    $img->save($upload_path.'/'.$path.'/t_'.$file_name);
                }
                return redirect('/admin/departament')
                ->with('message','Datos guardados correctamente')
                ->with('alert','success');
            }
        }
    }
    
}
