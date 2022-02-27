<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class DMHinhThucBDController extends Controller
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
        $data = DB::table('DM_HINH_THUC_BD')->selectRaw('MA_HINH_THUC_BD,TEN_HINH_THUC_BD,TU_VIET_TAT')->paginate(10);
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('pages.DM_HinhThucBD', $data);
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
        DB::table('DM_HINH_THUC_BD')->insert([
            'MA_HINH_THUC_BD' => $request->MA_HTBD,
            'TEN_HINH_THUC_BD' => $request->TEN_HTBD,
            'TU_VIET_TAT' => $request->TU_VT,
        ]);
        return redirect('/hinhthucBD');
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
        $data = DB::table('DM_HINH_THUC_BD')->where('MA_HINH_THUC_BD', $request->MA_HTBD)->update(['TEN_HINH_THUC_BD' => $request->TEN_HTBD, 'TU_VIET_TAT' => $request->TU_VT]);
        return redirect('/hinhthucBD');
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
        DB::delete('delete DM_HINH_THUC_BD where MA_HINH_THUC_BD = ?', [$id]);
        return redirect('/hinhthucBD');
    }
}