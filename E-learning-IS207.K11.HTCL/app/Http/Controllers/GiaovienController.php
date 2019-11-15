<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Giaoviens;

class GiaovienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Giaoviens'] = Giaoviens::all();

        return view('adminpage.giaovien.giaovien',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.giaovien.them_giaovien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ObjGiaovien = new Giaoviens();

        $ObjGiaovien->HoTen = $request->input('HoTen');
        $ObjGiaovien->Loai = $request->input('Loai');
        $ObjGiaovien->NgaySinh = $request->input('NgaySinh');
        $ObjGiaovien->DiaChi = $request->input('DiaChi');
        $ObjGiaovien->SDT = $request->input('SDT');

        $ObjGiaovien->save();

        return redirect()->route('giaoviens.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['Giaoviens'] = Giaoviens::find($id);

        return view('adminpage.giaovien.them_giaovien',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ObjGiaovien = Giaoviens::find($id);

        $ObjGiaovien->HoTen = $request->input('HoTen');
        $ObjGiaovien->Loai = $request->input('Loai');
        $ObjGiaovien->NgaySinh = $request->input('NgaySinh');
        $ObjGiaovien->DiaChi = $request->input('DiaChi');
        $ObjGiaovien->SDT = $request->input('SDT');

        $ObjGiaovien->save();

        return redirect()->route('giaoviens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ObjGiaovien = Giaoviens::find($id);

        $ObjGiaovien->delete();
        return redirect() -> route('giaoviens.index');
    }
}
