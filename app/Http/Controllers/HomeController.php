<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        return view('home');
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function language(){
        return view('languages.index');

}

    function changeLang($langcode){

        App::setLocale($langcode);
        session()->put("lang_code",$langcode);
        return redirect()->back();
    }
}
