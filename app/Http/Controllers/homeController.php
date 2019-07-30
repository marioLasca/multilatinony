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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mexico = \App\parametro::find(1);
        $colombia = \App\parametro::find(2);
        return view('home', [
            'mexico' => $mexico,
            'colombia' => $colombia
        ]);
    }
}
