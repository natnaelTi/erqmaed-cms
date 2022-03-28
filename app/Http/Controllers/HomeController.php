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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function project()
    {
        return view('project');
    }

    public function project_detail()
    {
        return view('p_detail');
    }

    public function blog_detail()
    {
        return view('blog_detail');
    }
}
