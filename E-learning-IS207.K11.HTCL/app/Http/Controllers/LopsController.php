<?php

namespace App\Http\Controllers;

use App\Lop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LopsController extends Controller
{
    public function show($lop_id)
    {
        // get 2 or less lop to homepage
        // $lops = DB::table('lops')
        // ->join('users', 'lops.giao_vien_id', '=', 'users.id')
        // // ->join('media', 'lops.id', '=', 'media.model_id')
        // ->inRandomOrder()->where('published', 1)->limit(2)->get();
        $lop = Lop::where('ten_lop_hocs',$lop_id)->firstOrFail();
        //return page
        return view('Homepage.lop', compact('lop'));
    }
}
