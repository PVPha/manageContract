<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DMDanhHieuController extends Controller
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
        $data = DB::table('DM_DANH_HIEU')->selectRaw('MA_DANH_HIEU,TEN_DANH_HIEU,TU_VIET_TAT,THU_TU_UU_TIEN')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.DM_DanhHieu', $data);
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
        DB::table('DM_DANH_HIEU')->insert([
            'MA_DANH_HIEU' => $request->MA_DH,
            'TEN_DANH_HIEU' => $request->TEN_DH,
            'TU_VIET_TAT' => $request->TU_VT,
            'THU_TU_UU_TIEN' => $request->TT_UU_TIEN
        ]);
        return redirect('/danhhieu');
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
        $data = DB::table('DM_DANH_HIEU')->where('MA_DANH_HIEU', $request->MA_DH)->update(['TEN_DANH_HIEU' => $request->TEN_DH, 'TU_VIET_TAT' => $request->TU_VT, 'THU_TU_UU_TIEN' => $request->TT_UU_TIEN]);

        return redirect('/danhhieu');
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
        DB::delete('delete DM_DANH_HIEU where MA_DANH_HIEU = ?', [$id]);
        return redirect('/danhhieu');
    }
}