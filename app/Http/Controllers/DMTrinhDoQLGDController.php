<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMTrinhDoQLGDController extends Controller
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
        $data = DB::table('DM_TRINH_DO_QLGD')->selectRaw('MA_TRINH_DO_QLGD,TEN_TRINH_DO_QLGD,TU_VIET_TAT,THU_TU_UU_TIEN')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.DM_TrinhDoQLGD', $data);
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
        DB::table('DM_TRINH_DO_QLGD')->insert([
            'MA_TRINH_DO_QLGD' => $request->MA_TD_QLGD,
            'TEN_TRINH_DO_QLGD' => $request->TEN_TD_QLGD,
            'TU_VIET_TAT' => $request->TU_VT,
            'THU_TU_UU_TIEN' => $request->TT_UU_TIEN
        ]);
        return redirect('/trinhdoQLGD');
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
        $data = DB::table('DM_TRINH_DO_QLGD')->where('MA_TRINH_DO_QLGD', $request->MA_TD_QLGD)->update(['TEN_TRINH_DO_QLGD' => $request->TEN_TD_QLGD, 'TU_VIET_TAT' => $request->TU_VT, 'THU_TU_UU_TIEN' => $request->TT_UU_TIEN]);
        return redirect('/trinhdoQLGD');
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
        DB::delete('delete DM_TRINH_DO_QLGD where MA_TRINH_DO_QLGD = ?', [$id]);
        return redirect('/trinhdoQLGD');
    }
}