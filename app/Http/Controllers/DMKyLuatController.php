<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMKyLuatController extends Controller
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
        $data = DB::table('DM_KY_LUAT')->selectRaw('MA_KY_LUAT,TEN_KY_LUAT,TU_VIET_TAT,THU_TU_UU_TIEN,SO_THANG')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.DM_KyLuat', $data);
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
        DB::table('DM_KY_LUAT')->insert([
            'MA_KY_LUAT' => $request->MA_KL,
            'TEN_KY_LUAT' => $request->TEN_KL,
            'TU_VIET_TAT' => $request->TU_VT,
            'THU_TU_UU_TIEN' => $request->TT_UU_TIEN,
            'SO_THANG' => $request->SO_T
        ]);
        return redirect('/kyluat');
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
        $data = DB::table('DM_KY_LUAT')->where('MA_KY_LUAT', $request->MA_KL)->update(['TEN_KY_LUAT' => $request->TEN_KL, 'TU_VIET_TAT' => $request->TU_VT, 'THU_TU_UU_TIEN' => $request->TT_UU_TIEN, 'SO_THANG' => $request->SO_T]);
        return redirect('/kyluat');
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
        DB::delete('delete DM_KY_LUAT where MA_KY_LUAT = ?', [$id]);
        return redirect('/kyluat');
    }
}