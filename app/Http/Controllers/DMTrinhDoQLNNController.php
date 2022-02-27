<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMTrinhDoQLNNController extends Controller
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
        $data = DB::table('DM_HE_SO_PHU_CAP')->selectRaw('MA_HSPC,TEN_HSPC,TU_VIET_TAT')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.DM_HeSoPhuCap', $data);
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
        DB::table('DM_HE_SO_PHU_CAP')->insert([
            'MA_HSPC' => $request->MA_HSPC,
            'TEN_HSPC' => $request->TEN_HSPC,
            'TU_VIET_TAT' => $request->TU_VT,
        ]);
        return redirect('/hesophucap');
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
        $data = DB::table('DM_HE_SO_PHU_CAP')->where('MA_HSPC', $request->MA_HSPC)->update(['TEN_HSPC' => $request->TEN_HSPC, 'TU_VIET_TAT' => $request->TU_VT]);
        return redirect('/hesophucap');
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
        DB::delete('delete DM_HE_SO_PHU_CAP where MA_HSPC = ?', [$id]);
        return redirect('/hesophucap');
    }
}