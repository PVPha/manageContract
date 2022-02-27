<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMQuanHeController extends Controller
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
        $data = DB::table('DM_QUAN_HE')->selectRaw('MA_QUAN_HE,TEN_QUAN_HE,TU_VIET_TAT,QHE_VO_CHONG,STT_IN')->paginate(10);
        return view('pages.DM_QuanHe', $data);
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
        DB::table('DM_QUAN_HE')->insert([
            'MA_QUAN_HE' => $request->MA_QH,
            'TEN_QUAN_HE' => $request->TEN_QH,
            'TU_VIET_TAT' => $request->TU_VT,
            'QHE_VO_CHONG' => $request->QH_VC,
            'STT_IN' => 0
        ]);
        return redirect('/quanhe');
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
        $data = DB::table('DM_QUAN_HE')->where('MA_QUAN_HE', $request->MA_QH)->update(['TEN_QUAN_HE' => $request->TEN_QH, 'TU_VIET_TAT' => $request->TU_VT, 'QHE_VO_CHONG' => $request->QH_VC, 'STT_IN' => 0]);
        return redirect('/quanhe');
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
        DB::delete('delete DM_QUAN_HE where MA_QUAN_HE = ?', [$id]);
        return redirect('/quanhe');
    }
}