<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class NgachController extends Controller
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
        $data = DB::table('NGACH_CONG_CHUC')->selectRaw('ID_NGACH,MA_SO_NGACH,NHOM,TEN_NGACH,SO_NAM_NANG_BAC,TU_VIET_TAT,THU_TU_UU_TIEN')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.Ngach', $data);
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
        DB::table('NGACH_CONG_CHUC')->insert([
            'ID_NGACH' => $request->ID_N,
            'MA_SO_NGACH' => $request->MA_N,
            'NHOM' => $request->NHOM,
            'TEN_NGACH' => $request->TEN_N,
            'SO_NAM_NANG_BAC' => $request->SO_NAM_NB,
            'TU_VIET_TAT' => $request->TU_VT,
            'THU_TU_UU_TIEN' => $request->TT_UU_TIEN
        ]);
        return redirect('/ngach');
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
        $data = DB::table('NGACH_CONG_CHUC')->where('ID_NGACH', $request->ID_N)->update([
            'MA_SO_NGACH' => $request->MA_N,
            'NHOM' => $request->NHOM,
            'TEN_NGACH' => $request->TEN_N,
            'SO_NAM_NANG_BAC' => $request->SO_NAM_NB,
            'TU_VIET_TAT' => $request->TU_VT,
            'THU_TU_UU_TIEN' => $request->TT_UU_TIEN
        ]);
        return redirect('/ngach');
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
        DB::delete('delete NGACH_CONG_CHUC where ID_NGACH = ?', [$id]);
        return redirect('/ngach');
    }
}