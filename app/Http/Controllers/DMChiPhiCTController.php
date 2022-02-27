<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DMChiPhiCTController extends Controller
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
        $data = DB::table('DM_CPHI_CONG_TAC')->selectRaw('MA_CPHI_CONG_TAC,TEN_CPHI_CONG_TAC,TU_VIET_TAT')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.DM_ChiPhiCongTac', $data);
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
        DB::table('DM_CPHI_CONG_TAC')->insert([
            'MA_CPHI_CONG_TAC' => $request->MA_CP_CT,
            'TEN_CPHI_CONG_TAC' => $request->TEN_CP_CT,
            'TU_VIET_TAT' => $request->TU_VT
        ]);
        return redirect('/chiphiCT');
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
        $data = DB::table('DM_CPHI_CONG_TAC')->where('MA_CPHI_CONG_TAC', $request->MA_CP_CT)->update(['TEN_CPHI_CONG_TAC' => $request->TEN_CP_CT, 'TU_VIET_TAT' => $request->TU_VT]);

        return redirect('/chiphiCT');
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
        DB::delete('delete DM_CPHI_CONG_TAC where MA_CPHI_CONG_TAC = ?', [$id]);
        return redirect('/chiphiCT');
    }
}