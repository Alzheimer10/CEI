<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = \App\Models\estudiante::orderBy('updated_at', 'DESC')->limit(4)->get();
        return view('home')->with('lastEstudiantes', $estudiantes);
    }

    public function documentation($seccion){
        return view('documentacion.documentacion');
    }
}
