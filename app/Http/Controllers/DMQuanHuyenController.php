<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMQuanHuyenController extends Controller
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
        $data = DB::table('DM_QUAN_HUYEN')->selectRaw('MA_QUAN_HUYEN,TEN_QUAN_HUYEN,TU_VIET_TAT,FK_MA_TINH_TP')->paginate(10);
        $tp = DB::select('select MA_TINH_TP, TEN_TINH_TP from DM_TINH_TP ');
        return view('pages.DM_QuanHuyen', ['data' => $data, 'tp' => $tp]);
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
        DB::table('DM_QUAN_HUYEN')->insert([
            'MA_QUAN_HUYEN' => $request->MA_QH,
            'TEN_QUAN_HUYEN' => $request->TEN_QH,
            'TU_VIET_TAT' => $request->TU_VT,
            'FK_MA_TINH_TP' => $request->MA_TTP
        ]);
        return redirect('/quanhuyen');
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
        $data = DB::table('DM_QUAN_HUYEN')->where('MA_QUAN_HUYEN', $request->MA_QH)->update(['TEN_QUAN_HUYEN' => $request->TEN_QH, 'TU_VIET_TAT' => $request->TU_VT, 'FK_MA_TINH_TP' => $request->MA_TTP]);
        return redirect('/quanhuyen');
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
        DB::delete('delete DM_QUAN_HUYEN where MA_QUAN_HUYEN = ?', [$id]);
        return redirect('/quanhuyen');
    }
}