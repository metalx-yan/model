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
<<<<<<< HEAD
=======

        // middleware untuk semua method
        $this->middleware('nama-middleware');
        // middleware untuk method tertentu
        $this->middleware('nama-middleware', ['only'=>['methodA', 'methodB']]);
        // middleware untuk semua method, kecuali method tertentu
        $this->middleware('nama-middleware', ['except'=>['methodA', 'methodB']]);
>>>>>>> bd64c36f1600dca200cbffa95d664555d61f4ab7
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
