<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TuyenDungController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('TUYEN_DUNG')->selectRaw('MA_TD, BO_MON, KHOA, SO_LUONG, NGAY_BD, NGAY_KT')->paginate(10);
        return view('pages.TuyenDung',  $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        DB::table('TUYEN_DUNG')->insert([
            'MA_TD' => $request->MA_TD,
            'BO_MON' => $request->BO_MON,
            'KHOA' => $request->KHOA,
            'SO_LUONG' => $request->SO_LUONG,
            'NGAY_BD' => $request->NGAY_BD,
            'NGAY_KT' => $request->NGAY_KT
        ]);
        return redirect('/tuyendung');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('BAC_LUONG')->join('NGACH_CONG_CHUC', 'BAC_LUONG.FK_ID_NGACH', '=', 'NGACH_CONG_CHUC.ID_NGACH')->selectRaw('BAC_LUONG.BAC,BAC_LUONG.HE_SO_LUONG,BAC_LUONG.FK_ID_NGACH,BAC_LUONG.FK_ID_NHOM,BAC_LUONG.NGAY_BAT_DAU_HIEU_LUC,BAC_LUONG.NGAY_HET_HIEU_LUC')->where('NGACH_CONG_CHUC.ID_NGACH', '=', $id)->paginate('10');
        echo json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        //var_dump($request->all());
        $data = DB::table('TUYEN_DUNG')->where('MA_TD', $request->MA_TD)->update([
            'BO_MON' => $request->BO_MON,
            'KHOA' => $request->KHOA,
            'SO_LUONG' => $request->SO_LUONG,
            'NGAY_BD' => $request->NGAY_BD,
            'NGAY_KT' => $request->NGAY_KT
        ]);
        return redirect('/tuyendung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete TUYEN_DUNG where MA_TD = ?', [$id]);
        return redirect('/tuyendung');
    }
}