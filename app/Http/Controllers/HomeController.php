<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sohopdong = DB::select('select COUNT(MA_SO_HDONG_LDONG) as "SO_HOP_DONG" from HOP_DONG_LAO_DONG');
        $sohdgiahan = DB::select('select COUNT(MA_SO_HDONG_LDONG) as "SO_HOP_DONG_CAN_GIA_HAN" from HOP_DONG_LAO_DONG where DATEDIFF(d,HD_DEN_NGAY, CURRENT_TIMESTAMP ) > 0');
        $sohdcohan = DB::select('select COUNT(MA_SO_HDONG_LDONG) as "SO_HOP_DONG_CON_HAN" from HOP_DONG_LAO_DONG where DATEDIFF(d, CURRENT_TIMESTAMP, HD_DEN_NGAY) > 0');
        $sotd = DB::select('select SUM(SO_LUONG) as "SO_LUONG_TD"  from TUYEN_DUNG');
        // $sotdconhan = DB::select('select COUNT(MA_TD) as "SO_TD_CON_HAN" from TUYEN_DUNG where DATEDIFF(d, CURRENT_TIMESTAMP, NGAY_KT) > 0');
        $sotdconhan = DB::select('select COUNT(MA_TD) as "SO_TD_CON_HAN" from TUYEN_DUNG');
        $sotdhethan = DB::select('select COUNT(MA_TD) as "SO_TD_HET_HAN" from TUYEN_DUNG where DATEDIFF(d,NGAY_KT, CURRENT_TIMESTAMP ) > 0');
        return view('pages.index', ['sohd' => $sohopdong, 'sohdgiahan' => $sohdgiahan, 'sohdconhan' => $sohdcohan, 'sotd' => $sotd, 'sotdconhan' => $sotdconhan, 'sotdhethan' => $sotdhethan]);
    }
}