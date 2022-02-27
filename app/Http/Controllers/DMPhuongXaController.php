<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMPhuongXaController extends Controller
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
        $data = DB::table('DM_PHUONG_XA')->selectRaw('MA_PHUONG_XA,TEN_PHUONG_XA,TU_VIET_TAT,FK_MA_QUAN_HUYEN')->paginate(10);
        $qh = DB::select('select MA_QUAN_HUYEN, TEN_QUAN_HUYEN from DM_QUAN_HUYEN ');
        return view('pages.DM_PhuongXa', ['data' => $data, 'qh' => $qh]);
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
        DB::table('DM_PHUONG_XA')->insert([
            'MA_PHUONG_XA' => $request->MA_PX,
            'TEN_PHUONG_XA' => $request->TEN_PX,
            'TU_VIET_TAT' => $request->TU_VT,
            'FK_MA_QUAN_HUYEN' => $request->MA_QH
        ]);
        return redirect('/phuongxa');
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
        $data = DB::table('DM_PHUONG_XA')->where('MA_PHUONG_XA', $request->MA_PX)->update(['TEN_PHUONG_XA' => $request->TEN_PX, 'TU_VIET_TAT' => $request->TU_VT, 'FK_MA_QUAN_HUYEN' => $request->MA_QH]);
        return redirect('/phuongxa');
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
        DB::delete('delete DM_PHUONG_XA where MA_PHUONG_XA = ?', [$id]);
        return redirect('/phuongxa');
    }
}