<?php

namespace App\Http\Controllers;

use App\Lop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class DashboardSVController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('lop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $lops = Lop::ofHocVien()->get();
        $user = User::where('id', Auth::user()->id)->first();
        //return page
        return view('Homepage/dashboardsv', compact('lops','user'));
    }
}
