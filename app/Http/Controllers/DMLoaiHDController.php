<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMLoaiHDController extends Controller
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
        $data = DB::table('DM_LOAI_HOP_DONG')->selectRaw('MA_LOAI_HDONG,TEN_LOAI_HDONG,TU_VIET_TAT,SO_THANG')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.DM_LoaiHopDong', $data);
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
        DB::table('DM_LOAI_HOP_DONG')->insert([
            'MA_LOAI_HDONG' => $request->MA_LHD,
            'TEN_LOAI_HDONG' => $request->TEN_LHD,
            'TU_VIET_TAT' => $request->TU_VT,
            'SO_THANG' => $request->SO_T
        ]);
        return redirect('/loaiHD');
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
        $data = DB::table('DM_LOAI_HOP_DONG')->where('MA_LOAI_HDONG', $request->MA_LHD)->update(['TEN_LOAI_HDONG' => $request->TEN_LHD, 'TU_VIET_TAT' => $request->TU_VT, 'SO_THANG' => $request->SO_T]);
        return redirect('/loaiHD');
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
        DB::delete('delete DM_LOAI_HOP_DONG where MA_LOAI_HDONG = ?', [$id]);
        return redirect('/loaiHD');
    }
}