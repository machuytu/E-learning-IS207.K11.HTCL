<?php

namespace App\Http\Controllers;

use App\Lop;
use App\User;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function index()
    {
        $lops = Lop::select()->orderBy('created_at', 'DESC')->where('published', 1)->get();
        $lop_quantams = Lop::select()->inRandomOrder()->where('published', 1)->limit(3)->get();
        //return page
        return view('Homepage/homepage', compact('lops','lop_quantams'));
    }
}
