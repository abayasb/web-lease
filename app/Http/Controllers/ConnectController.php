<?php

namespace App\Http\Controllers;

use Dotenv\Validator as DotenvValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class ConnectController extends Controller
{

    public function __construct() {
        $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin()
    {
        return view('view-lease.view-login-lease');
    }

    public function getLogout()
    {
        Auth::logout();
        //Session::flush();
        return redirect('/');
    }

    public function postLogin(Request $request)
    {
        $rules=[
            'email'=>'required|email',
            'password'=>'required|min:8'
        ];

        $message=[
            'email.required'=>'Llene el campo de correo',
            'email.email'=>'Formato de correo no es valido',
            'password.required'=>'Ingrese su contraseña',
            'password.min'=>'La contraseña tiene que tener minimo 8 caracteres'
        ];

        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails()){
            return back()
                        ->withErrors($validator)
                        ->with('message','Se ha producido un error')
                        ->with('alert','danger');
        }else{
            /** CONDICION IF PARA COMPROBRAR EL CORREO Y LA CONTRASEÑA
             * SE UTILIZO LA PALABRA RESERVADA AUTH => LA CUAL ES LA 
             * ENCARGADA DE REALIZAR LA AUTENTIFIACION, LLAMA A LA FUNCION
             * ATTEMPT QUE RESIVE UN ARREGLE EN LA CUAL SE ENVIA
             * (['NOMBRE CAMPO DE DATABASE']=>CAMPO DEL FORMUTARIO CON REQUEST->INPUT('CAMPO'),
             *      'NOMBRE CAMPO DE DATABASE']=>CAMPO DEL FORMUTARIO CON REQUEST->INPUT('CAMPO')])
             */
            if(Auth::attempt(['email' => $request->input('email'), 
                'password' => $request->input('password')],true)){
                    $request->session()->regenerate();//GENERAR UNA SECCION PARA EL USUARIO
                    return redirect('/');
                }else{
                    return back()
                                ->with('message','Se ha prodocido un error, verifique que las credenciales sean las correctas')
                                ->with('alert','danger');
                }
        }
    }

    public function getRegister()
    {
        return view('view-lease.view-register-lease');
    }

    public function postRegister(Request $request)
    {
        $rules =[
            'name'=>'required',
            'lastName' =>'required',
            'phone'=>'required|max:10|min:0',
            'email' => 'required|email|unique:users,email',
            'password'=>'required|min:8',
            'confirm-password'=>'required|min:8|same:password'
        ];

        $message =[
            'name.required'=>'Llene el campo nombre',
            'lastName.required'=>'Llene el campo apellido',
            'phone.required' => 'Llene el campo telefono',
            'phone.max'=>'Telefono solo con 10 digitos',
            'phone.min' =>'No sea Patan',
            'email.required'=>'Llene el campo correo',
            'email.email'=>'El formato de su correo es invalido',
            'email.unique'=>'Ya existe ese correo electronico',
            'password.required'=>'Tiene que colocar contraseña',
            'password.min' =>'La contraseña debe tener almenos 8 caracteres',
            'confirm-password.required'=>'Confirme la contraseña',
            'confirm-password.min' =>'La contraseña debe tener almenos 8 caracteres',
            'confirm-password.same' => 'La contraseña no coiciden'
        ];
        
        $validator = Validator::make($request->all(),$rules, $message);
        
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->with('message','Se ha producido un error xD')
                        ->with('alert','danger');
        }else{
            $user = new User(); 
            $user->name = e($request->input('name'));
            $user->lastName = e($request->input('lastName'));
            $user->telefono = e($request->input('phone'));
            $user->email=e($request->input('email'));
            $user->password=Hash::make($request->input('password'));
            
            if($user->save()){
                return redirect('/login')
                ->with('message','Datos guardados correctamente')
                ->with('alert','success');
            }
        }
    }

    /*
    private function Validacion($request, $rules,$message){
        $validator = Validator::make($request->all(),$rules, $message);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->with('message','Se ha producido un error xD')
                        ->with('alert','danger');
        }
    }
    */
}
