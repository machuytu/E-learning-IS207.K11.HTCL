<?php
/**
 * Insert, Edit, Delete Hocvien
 */

use Illuminate\Http\Resources\Json\Resource;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocviens;

class HocvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Hocviens'] = Hocviens::all();

        return view('adminpage.hocvien.hocvien',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.hocvien.them_hocvien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->input());
        $ObjHocvien = new Hocviens();

        $ObjHocvien->HoTen = $request->input('HoTen');
        $ObjHocvien->NgaySinh = $request->input('NgaySinh');
        $ObjHocvien->DiaChi = $request->input('DiaChi');
        $ObjHocvien->SDT = $request->input('SDT');

        $ObjHocvien->save();

        return redirect()->route('hocviens.index');
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
        $data['Hocviens'] = Hocviens::find($id);

        return view('adminpage.hocvien.them_hocvien',$data);
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
        $ObjHocvien = Hocviens::find($id);

        $ObjHocvien->HoTen = $request->input('HoTen');
        $ObjHocvien->NgaySinh = $request->input('NgaySinh');
        $ObjHocvien->DiaChi = $request->input('DiaChi');
        $ObjHocvien->SDT = $request->input('SDT');

        $ObjHocvien->save();

        return redirect()->route('hocviens.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ObjHocvien = Hocviens::find($id);
        $ObjHocvien->delete();

        return redirect() -> route('hocviens.index');
    }
}
