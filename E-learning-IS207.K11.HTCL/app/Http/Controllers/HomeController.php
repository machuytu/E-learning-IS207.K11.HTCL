<?php

namespace App\Http\Controllers;

use App\Lop;
use App\TheLoai;
use App\User;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
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
    public function getinfo(Request $request) {
        info($request->id);
        $id=$request->id;

        $lop=DB::table('lops')
                        ->join('users','users.id','=','lops.giao_vien_id')
                        ->select('users.name', 'lops.ten_lop_hoc', 'lops.thgian_bd',
                            'lops.thgian_kt', 'lops.ca_hoc', 'lops.thu_hoc', 'lops.gia', 'lops.mo_ta', 'lops.mo_hoc_id')
                        ->where('lops.id',$id)
                        ->get();
        return $lop;
    }
    public function index()
    {
        // lop theo id the loai va tat ca
        if(request()->id_the_loai) {
            $lops = Lop::select()->where('the_loai_id', request()->id_the_loai)->where('published', 1)->get();
        }
        else {
            $lops = Lop::select()->orderBy('created_at', 'DESC')->where('published', 1)->get();
        }

        //lop goi y o hinh
        $lop_goiys = Lop::select()->orderBy('created_at', 'DESC')->where('published', 1)->limit(3)->get();

        // lop quan tam (data mining - chua lam)
        $lop_quantams = Lop::select()->inRandomOrder()->where('published', 1)->limit(3)->get();

        // thể loại
        $the_loai_lap_trinhs = TheLoai::select()->orderBy('created_at', 'DESC')->where('loai_tl','Lập trình')->get();
        $the_loai_ngoai_ngus = TheLoai::select()->orderBy('created_at', 'DESC')->where('loai_tl','Ngoại Ngữ')->get();
        $the_loai_ky_nang_mens = TheLoai::select()->orderBy('created_at', 'DESC')->where('loai_tl','Kỹ năng sống')->get();
        $the_loai_do_hoas = TheLoai::select()->orderBy('created_at', 'DESC')->where('loai_tl','Đồ họa')->get();

        // return page
        return view('Homepage/homepage', compact('lops','lop_quantams', 'lop_goiys','the_loai_lap_trinhs',
            'the_loai_ngoai_ngus', 'the_loai_ky_nang_mens', 'the_loai_do_hoas'));
    }
}
