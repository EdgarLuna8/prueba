<?php

namespace App\Http\Controllers;

use App\Prospecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prospectos = Prospecto::all();
        return view('home', compact('prospectos'));
    }

    public function inicio()
    {
        $prospectos = Prospecto::all();
        return view('inicio', compact('prospectos'));
    }


}
