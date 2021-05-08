<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('view-admin.departament.departament-gallery');
    }

    public function getGalleryAdd()
    {
        # code...
        return view('view-admin.departament.departament-gallery-add');
    }
}
