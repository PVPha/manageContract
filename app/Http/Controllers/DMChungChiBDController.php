<?php

namespace App\Http\Controllers;

use App\Models\DM_CHUNG_CHI_BD;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DMChungChiBDController extends Controller
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
        $data = DB::table('dm_chung_chi_bd')->selectRaw('MA_CHUNG_CHI_BD,TEN_CHUNG_CHI_BD,TU_VIET_TAT,THU_TU_UU_TIEN')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.DM_chungchi', $data);
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
        DB::table('dm_chung_chi_bd')->insert([
            'MA_CHUNG_CHI_BD' => $request->MA_CC_BD,
            'TEN_CHUNG_CHI_BD' => $request->TEN_CC_BD,
            'TU_VIET_TAT' => $request->TU_VT,
            'THU_TU_UU_TIEN' => $request->TT_UU_TIEN
        ]);
        return redirect('/chungchiBD');
    }

    public function update2(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('dm_chung_chi_bd')->where('MA_CHUNG_CHI_BD', '=', $id)->get();
        // echo '<pre>';
        // var_dump($data);
        // echo '</pre>';
        return $data;
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

        $data = DB::table('dm_chung_chi_bd')->where('MA_CHUNG_CHI_BD', $request->MA_CC_BD)->update(['TEN_CHUNG_CHI_BD' => $request->TEN_CC_BD, 'TU_VIET_TAT' => $request->TU_VT, 'THU_TU_UU_TIEN' => $request->TT_UU_TIEN]);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return redirect('/chungchiBD');
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
        DB::delete('delete dm_chung_chi_bd where MA_CHUNG_CHI_BD = ?', [$id]);
        return redirect('/chungchiBD');
    }
}