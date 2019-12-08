<?php

namespace App\Http\Controllers;
use App\Lop;
use Illuminate\Http\Request;

class DashboardSVBaiHocController extends Controller
{
    public function show($lop_ten_link)
    {
        $lop = Lop::select()->where('ten_link',  $lop_ten_link)->with('baiHocs')->firstOrFail();
        //return page
        return view('Homepage.dashboardsvbaihoc', compact('lop'));
    }
}
