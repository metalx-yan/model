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

        // middleware untuk semua method
        $this->middleware('nama-middleware');
        // middleware untuk method tertentu
        $this->middleware('nama-middleware', ['only'=>['methodA', 'methodB']]);
        // middleware untuk semua method, kecuali method tertentu
        $this->middleware('nama-middleware', ['except'=>['methodA', 'methodB']]);
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
