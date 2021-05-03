<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController extends Controller
{
    public function getLogin()
    {
        return view('view-lease.view-login-lease');
    }
}
