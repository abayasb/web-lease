<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $provincias = DB::table('provincia')->get();
        
        return view('view-admin.departament.departament-add',compact('provincias'));
        //return view('view-admin.departament.departament-add');
    }
}
