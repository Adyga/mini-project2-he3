<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
    public function about()
    {
        return view ('about');
    }
    public function first()
    {
        return view ('first');
    }
    public function second()
    {
        return view ('second');
    }
    public function last()
    {
        return view ('last');
    }
    public function contact()
    {
        return view ('contact');
    }

}
