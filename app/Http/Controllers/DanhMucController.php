<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use App\Models\dm_chung_chi_bd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhMucController extends Controller
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
        // $ChungChiBD = DB::table('COUNTRIES')->selectRaw('COUNTRY_ID,COUNTRY_NAME,REGION_ID')->paginate(30);
        $ChungChiBD = DB::table('DM_CHUNG_CHI_BD')->get();
        echo '<pre>';
        print_r($ChungChiBD);
        echo '</pre>';
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
        // $CCBD = new dm_chung_chi_bd;
        // $CCBD->MA_CHUNG_CHI_BD = $request->MA_CC_BD;
        // $CCBD->TEN_CHUNG_CHI_BD = $request->TEN_CC_BD;
        // $CCBD->TU_VIET_TAT = $request->TU_VT;
        // $CCBD->THU_TU_UU_TIEN = $request->TT_UU_TIEN;
        // $CCBD->save();
        DB::table('dm_chung_chi_bd')->insert([
            'MA_CHUNG_CHI_BD' => $request->MA_CC_BD,
            'TEN_CHUNG_CHI_BD' => $request->TEN_CC_BD,
            'TU_VIET_TAT' => $request->TU_VT,
            'THU_TU_UU_TIEN' => $request->TT_UU_TIEN
        ]);
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
    }
}