<?php

namespace App\Http\Controllers;

use App\Lop;
use App\User;
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
        // get 2 or less lop to homepage
        // $lops = DB::table('lops')
        // ->join('users', 'lops.giao_vien_id', '=', 'users.id')
        // // ->join('media', 'lops.id', '=', 'media.model_id')
        // ->inRandomOrder()->where('published', 1)->limit(2)->get();
        $lops = Lop::all();
        //return page
        return view('Homepage/homepage', compact('lops'));
    }
}
