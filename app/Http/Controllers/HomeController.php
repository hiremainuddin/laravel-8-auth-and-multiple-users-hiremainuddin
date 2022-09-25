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
    public function userHome()
    {
        return view('backend.dashboard',["msg"=>"Hello! I am user"]);
    }

    public function editorHome()
    {
        return view('backend.dashboard',["msg"=>"Hello! I am editor"]);
    }

    public function adminHome()
    {
        return view('backend.dashboard',["msg"=>"Hello! I am admin"]);
    }
}
