<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMTinhTPController extends Controller
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
        $data = DB::table('DM_TINH_TP')->selectRaw('MA_TINH_TP,TEN_TINH_TP,TU_VIET_TAT,FK_MA_QUOC_GIA')->paginate(10);
        return view('pages.DM_TinhThanhPho', $data);
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
        DB::table('DM_TINH_TP')->insert([
            'MA_TINH_TP' => $request->MA_TTP,
            'TEN_TINH_TP' => $request->TEN_TTP,
            'TU_VIET_TAT' => $request->TU_VT,
            'FK_MA_QUOC_GIA' => $request->MA_QG
        ]);
        return redirect('/tinhTP');
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
        //var_dump($request->all());
        $data = DB::table('DM_TINH_TP')->where('MA_TINH_TP', $request->MA_TTP)->update(['TEN_TINH_TP' => $request->TEN_TTP, 'TU_VIET_TAT' => $request->TU_VT, 'FK_MA_QUOC_GIA' => $request->MA_QG]);
        return redirect('/tinhTP');
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
        DB::delete('delete DM_TINH_TP where MA_TINH_TP = ?', [$id]);
        return redirect('/tinhTP');
    }
}