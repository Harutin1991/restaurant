<?php

namespace App\Http\Controllers;

use App\Admin\AboutUs;
use Illuminate\Http\Request;
use App\Admin\ContactUs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        App::setLocale('ru');
        session()->put('locale', 'ru');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contactInfo = ContactUs::all();
        $aboutInfo = AboutUs::all();
        return view('home.index', compact('contactInfo', 'aboutInfo'));
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
