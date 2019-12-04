<?php

namespace App\Http\Controllers;

use App\Lop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LopsController extends Controller
{
    public function show($lop_ten_link)
    {
        $lop = Lop::select()->where('ten_link',  $lop_ten_link)->firstOrFail();
        //return page
        return view('Homepage.lop', compact('lop'));
    }
}
