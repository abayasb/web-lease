<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        # code...
        return view('view-admin.departament.departament-add');
    }
}
