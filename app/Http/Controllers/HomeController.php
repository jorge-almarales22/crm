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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   
        if (!$request->session()->has('themeBlack') && !$request->session()->has('themeWhite')) {

            $request->session()->put('themeWhite', 'white');
            
        }
        return view('welcome');

    }

    public function change(Request $request)
    {
        

        if ($request->session()->has('themeWhite')) {

            $request->session()->pull('themeWhite', 'default');
            $request->session()->put('themeBlack', 'black');
            
            
        }elseif ($request->session()->has('themeBlack')) {

            $request->session()->pull('themeBlack', 'default');
            $request->session()->put('themeWhite', 'white');
            
        }
   
        return redirect()->route('index');

    }
    public function home(){
        return view('home');
    }

}
