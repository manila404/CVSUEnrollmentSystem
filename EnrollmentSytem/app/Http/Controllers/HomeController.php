<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');

    }

    public function index_department()
    {

        return view('department.departmentboard');

    }
    
    public function index_registrar()
    {

        return view('registrar.registrarboard');

    }
}
