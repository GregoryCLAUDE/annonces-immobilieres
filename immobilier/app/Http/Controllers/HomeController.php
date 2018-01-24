<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\adv;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advs = adv::orderBy('created_at')->get();
        
        return view('welcome', compact('advs'));
    }
}
