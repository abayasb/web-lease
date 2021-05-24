<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ModelGallery;
use App\Models\ModelDepartamento;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

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
        return view('view-admin.departament.departament-gallery', compact('departament'));
    }

    public function getGalleryAdd($id_departamento, Request $request)
    {
    
        $departament = ModelDepartamento::where('id_departamento', $id_departamento)->first();

        if ($departament->id != Auth::user()->id) {
            //return $departament->id . 'No sea patan no puede ingresar ahi' . Auth::user()->id;
            return back()->with('message','No tiene permiso de acceso a ese departamento no seas patan')->with('alert','danger');
        } else {

            //return $departament;
            return view('view-admin.departament.departament-gallery-add', compact('departament'));
        }
    }

    public function postDepartamentGallery($id_identificador, Request $request)
    {
        $rules = [
            'imagen' => 'required'
        ];

        $message = [
            'imagen.required' => 'Seleccione una imagen'
        ];

        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->with('message', 'Se ha producido un error xD')
                ->with('alert', 'danger');
        } else {
            if ($request->hasFile('imagen')) {
                $path = '/' . date('Y-m-d');
                $fileExt = trim($request->file('imagen')->getClientOriginalExtension());
                $upload_path = Config::get('filesystems.disks.uploads.root');
                $name = Str::slug(str_replace($fileExt, '', $request->file('imagen')->getClientOriginalName()));
                $file_name = rand(1, 999) . '-' . $name . '.' . $fileExt;

                $file_file = $upload_path . '/' . $path . '/' . $file_name;

                $gallery = new ModelGallery;
                $gallery->id_departamento = $id_identificador;
                $gallery->file_path = date('Y-m-d');
                $gallery->file_name = $file_name;

                if ($fileExt == "jpg" || $fileExt == "png") {
                    if ($gallery->save()) {
                        if ($request->hasFile('imagen')) {
                            $fl = $request->imagen->storeAs($path, $file_name, 'uploads');
                            $img = Image::make($file_file);
                            $img->resize(256, 256, function ($constraint) {
                                $constraint->upsize();
                            });
                            $img->save($upload_path . '/' . $path . '/t_' . $file_name);
                        }
                        return back()->with('message', 'Actualizado con exito')->with('alert', 'success');
                    }
                } else {
                    return back()->with('message', 'Archivo no permitido')->with('alert', 'danger');
                }
            }
        }
    }

    public function getDepartamentGalleryDelete($id_identificador, $id_identificador_gallery)
    {
        //return $id_identificador.'===>'.$id_identificador_gallery;
        //$gallery = ModelGallery::findOrFail($id_identificador_gallery);
        $gallery = ModelGallery::where('id_gallery',$id_identificador_gallery)->first();
        
        $path = $gallery->file_path;
        $file = $gallery->file_name;
        $upload_path = Config::get('filesystems.disks.uploads.root');
        //return $gallery;
        if ($gallery->id_departamento != $id_identificador) {
            # code...
            //return 'Entro Para el Back ==>'.$gallery->id_departamento.'===>'.$id_identificador;
            return back()->with('message','Imagen no se puede eliminar no tiene acceso, no se pase de patan')->with('alert','danger');
        }else{
            //return 'Entro a Falso ==> '.$gallery->id_departamento.'===>'.$id_identificador;
            //return 'id_gallery'.'='.$gallery->id_departamento;
            //$delete = DB::table('gallery_departamento')->where('id_gallery','=',$gallery->id_departamento)->delete();
           // return  DB::table('gallery_departamento')->where('id_gallery','=',$gallery->id_departamento)->delete();
           //return  $id_identificador_gallery;
           //return $gallery->delete();
            if (DB::table('gallery_departamento')->where('id_gallery','=', $id_identificador_gallery)->delete()) {
                
                unlink($upload_path.'/'.$path.'/'.$file);
                unlink($upload_path.'/'.$path.'/t_'.$file);
                return back()->with('message','Imagen eliminada con exito')->with('alert','success');
            }
        }
    }
}
