<?php

namespace App\Http\Controllers;

use App\BaiHoc;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSVBaiHocCTController extends Controller
{
    public function show($baihoc_lien_quan)
    {
        $baihoc = BaiHoc::where('lien_quan', $baihoc_lien_quan)->firstOrFail();
        // $baihocs = BaiHoc::where('lop_id',  $baihoc->lop_id)->firstOrFail();
        $baihoc_truoc = BaiHoc::where('lop_id',  $baihoc->lop_id)
            ->where('vi_tri_bai_hoc','<',$baihoc->vi_tri_bai_hoc)
            ->orderBy('vi_tri_bai_hoc','desc')
            ->first();
        $baihoc_sau = BaiHoc::where('lop_id',  $baihoc->lop_id)
            ->where('vi_tri_bai_hoc','>',$baihoc->vi_tri_bai_hoc)
            ->orderBy('vi_tri_bai_hoc','asc')
            ->first();
        $user = User::where('id', Auth::user()->id)->first();
        //return page
        return view('Homepage.dashboardsvbaihocCT', compact('baihoc', 'baihoc_truoc', 'baihoc_sau','user'));
    }
}
