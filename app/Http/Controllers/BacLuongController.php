<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BacLuongController extends Controller
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
        $data = DB::table('BAC_LUONG')->selectRaw('BAC, HE_SO_LUONG, NGAY_BAT_DAU_HIEU_LUC, NGAY_HET_HIEU_LUC, FK_ID_NGACH, FK_ID_NHOM')->paginate(10);

        $quantum = DB::select('SELECT ID_NGACH,TEN_NGACH FROM NGACH_CONG_CHUC');

        return view('pages.BacLuong', ['data' => $data, 'quantum' => $quantum]);
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
        DB::table('BAC_LUONG')->insert([
            'BAC' => $request->BAC,
            'HE_SO_LUONG' => $request->HS_LUONG,
            'NGAY_BAT_DAU_HIEU_LUC' => $request->NGAY_BD,
            'NGAY_HET_HIEU_LUC' => $request->NGAY_KT,
            'FK_ID_NGACH' => $request->ID_NGACH,
            'FK_ID_NHOM' => $request->ID_NHOM
        ]);
        echo 'Thêm thành công';
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
        $data = DB::table('BAC_LUONG')->where('BAC', $request->BAC)->update([
            'HE_SO_LUONG' => $request->HS_LUONG,
            'NGAY_BAT_DAU_HIEU_LUC' => $request->NGAY_BD,
            'NGAY_HET_HIEU_LUC' => $request->NGAY_KT,
            'FK_ID_NGACH' => $request->ID_NGACH,
            'FK_ID_NHOM' => $request->ID_NHOM
        ]);
        // return redirect('/bacluong');
        print_r($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::delete('delete BAC_LUONG where BAC = ?', [$id]);
        return redirect('/bacluong');
    }
}