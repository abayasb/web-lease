<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }
    public function getInfotmacion()
    {
        return view('view-admin.departament.information-personal');
    }
}
