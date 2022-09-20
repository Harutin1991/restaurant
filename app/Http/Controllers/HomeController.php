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
        //return view('home');
        return view('home.index');
    }

	public function about()
    {
        //return view('home');
        return view('home.about');
    }
    public function blog()
    {
        //return view('home');
        return view('home.blog');
    }
    public function contact()
    {
        //return view('home');
        return view('home.contact');
    }
    public function elements()
    {
        //return view('home');
        return view('home.elements');
    }
    public function foodMenu()
    {
        //return view('home');
        return view('home.food_menu');
    }
    public function menu()
    {
        //return view('home');
        return view('home.menu');
    }
    public function singleBlog()
    {
        //return view('home');
        return view('home.single_blog');
    }
}
