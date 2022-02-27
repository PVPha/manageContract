<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class QuanLyHDLDController extends Controller
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
        $contract = DB::table('HOP_DONG_LAO_DONG')->selectRaw("MA_SO_HDONG_LDONG,BEN_A,BEN_B,HD_TU_NGAY,HD_DEN_NGAY,CHUC_DANH_CHUYEN_MON ,case when DATEDIFF(d,HD_DEN_NGAY, CURRENT_TIMESTAMP ) > 0 then N'hết hạn' else N'còn hạn' END as 'TINH_TRANG_HD',MA_CAN_BO")->paginate(10);
        $typeContract = DB::select('SELECT MA_LOAI_HDONG, TEN_LOAI_HDONG,SO_THANG FROM DM_LOAI_HOP_DONG');
        $quantum = DB::select('SELECT ID_NGACH,TEN_NGACH,MA_SO_NGACH FROM NGACH_CONG_CHUC');
        $bl = DB::select('select BAC,HE_SO_LUONG from BAC_LUONG');
        $tp = DB::select('SELECT MA_TINH_TP,TEN_TINH_TP FROM DM_TINH_TP');
        $qh = DB::select('SELECT MA_QUAN_HUYEN,TEN_QUAN_HUYEN FROM DM_QUAN_HUYEN');
        $px = DB::select('SELECT MA_PHUONG_XA,TEN_PHUONG_XA FROM DM_PHUONG_XA');
        return view('pages.QL_HDLD', ['contract' => $contract, 'typeContract' => $typeContract, 'quantum' => $quantum, 'bl' => $bl, 'tp' => $tp, 'qh' => $qh, 'px' => $px]);
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

    public function extendContract(Request $request)
    {
        DB::table('GIA_HAN')->insert([
            'FK_ID_QT_CTAC_NUOC_NGOAI' => $request->FK_ID_QT_CTAC_NUOC_NGOAI,
            'LAN_GIA_HAN' => $request->LAN_GIA_HAN,
            'TU_NGAY' => $request->TU_NGAY,
            'DEN_NGAY' => $request->DEN_NGAY,
            'SO_QUYET_DINH' => $request->SO_QUYET_DINH,
            'NGAY_QUYET_DINH' => $request->NGAY_QUYET_DINH,
            'GHI_CHU' => $request->GHI_CHU,
            'NGAY_CAP_NHAT' => $request->NGAY_CAP_NHAT
        ]);
        DB::table('HOP_DONG_LAO_DONG')->where('MA_SO_HDONG_LDONG', $request->MA_SO_HDONG_LDONG)->update([
            'HD_TU_NGAY' => $request->TU_NGAY,
            'HD_DEN_NGAY' => $request->DEN_NGAY,
        ]);
        return redirect('/quanlyHDLD');
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
        DB::table('HOP_DONG_LAO_DONG')->insert([
            'MA_SO_HDONG_LDONG' => $request->MA_HDLD,
            'BEN_A' => $request->BEN_A,
            'BEN_A_QUOC_TICH' => $request->BEN_A_QT,
            'BEN_A_CHUC_VU' => $request->BEN_A_CV,
            'BEN_A_DIEN_THOAI' => $request->BEN_A_DT,
            'BEN_A_DAI_DIEN_CHO' => $request->BEN_A_DD,
            'BEN_A_DIA_CHI' => '236 Lê Văn Sỹ, Phường 1, Tân Bình, Thành phố Hồ Chí Minh, Việt Nam',
            'BEN_B' => $request->BEN_B,
            'NGHE_NGHIEP' => $request->NN,
            'MA_CAN_BO' => $request->MA_CB,
            'FK_MA_LOAI_HDONG' => $request->LOAI_HD,
            'HD_TU_NGAY' => $request->HD_TU,
            'HD_DEN_NGAY' => $request->HD_DEN,
            'HD_FK_MA_BO_MON' => $request->BO_MON,
            'CHUC_DANH_CHUYEN_MON' => $request->CDANH_CM,
            'FK_MA_CHUC_VU' => $request->CV,
            'CV_PHAI_LAM' => $request->CVIEC_PL,
            'THOI_GIAN_LAM_VIEC' => $request->TG_LVIEC,
            'DCU_LAM_VIEC_CAP_PHAT' => $request->CPHAT,
            'PHUONG_TIEN_DI_LAI' => $request->PTIEN_DL,
            'NGACH' => $request->NGACH,
            'BAC' =>  $request->BAC_L,
            'HE_SO_LUONG' =>  $request->HSO_L,
            'HINH_THUC_TRA_LUONG' => $request->HTHUC_TL,
            'PHU_CAP_GOM' => $request->PCAP,
            'THOI_GIAN_TRA_LUONG' => $request->TG_TLUONG,
            'TIEN_THUONG' => $request->TIEN_T,
            'CHE_DO_NANG_LUONG' => $request->CDO_NL,
            'BAO_HO_LDONG' => $request->BHO_LD,
            'CHE_DO_NGHI_NGOI' => $request->CDO_NN,
            'BHXH_BHYT' => $request->BHIEM,
            'CHE_DO_DAO_TAO' => $request->CDO_DT,
            'QUYEN_LOI_DUOC_HUONG' => $request->QLOI_DH,
            'NHUNG_THOA_THUAN_KHAC' => $request->TTHUAN_K,
            'BOI_THUONG' => $request->BTHUONG,
            'HDLD_LAM_TAI' => $request->HD_LTAI,
            'GHI_CHU' => $request->GCHU,
            'NGAY_KY' => $request->NKY,
            'THU_VIEC_TU_NGAY' => $request->TV_TU,
            'THU_VIEC_DEN_NGAY' => $request->TV_DEN,
            'C85_PHAN_TRAM' => NULL,
            'SO_HOP_DONG' => $request->MA_HDLD,
            'NOI_DANG_KY_BHYT' => $request->NOI_DK_BH,
            'HE_SO_LUONG_IN' => $request->HSO_L,
            'LOAI_HOP_DONG' => $request->LOAI_HD,
            'CAN_CU_1' => NULL,
            'CAN_CU_2' => NULL,
            'HUONG_KHOAN_THUONG' => NULL,
            'BHYT_HDLV' => NULL,
            'DON_VI_LAM_VIEC_IN' => $request->BO_MON,
            'FK_ID_NGACH' => $request->NGACH,
            'HO_KHAU_THUONG_TRU' => $request->DIACHI
        ]);
        DB::insert('insert into CAN_BO_GIANG_DAY(MA_CAN_BO,HO,TEN,DIA_CHI,HE_SO_LUONG,MA_BO_MON,NGACH) values(?,?,?,?,?,?,?)', [$request->MA_CB, substr($request->BEN_B, 0, strrpos($request->BEN_B, ' ')), substr($request->BEN_B, strrpos($request->BEN_B, ' ')), $request->DIACHI, $request->HSO_L, $request->BO_MON, $request->NGACH]);
        return redirect('/quanlyHDLD');
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
        $data = DB::select('select * from HOP_DONG_LAO_DONG where MA_SO_HDONG_LDONG = ?', [$id]);
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
        //
        //var_dump($request->all());
        $data = DB::table('HOP_DONG_LAO_DONG')->where('MA_SO_HDONG_LDONG', $request->MA_HDLD)->update([
            'BEN_A' => $request->BEN_A,
            'BEN_A_QUOC_TICH' => $request->BEN_A_QT,
            'BEN_A_CHUC_VU' => $request->BEN_A_CV,
            'BEN_A_DIEN_THOAI' => $request->BEN_A_DT,
            'BEN_A_DAI_DIEN_CHO' => $request->BEN_A_DD,
            'BEN_A_DIA_CHI' => $request->BEN_A_DC,
            'BEN_B' => $request->BEN_B,
            'NGHE_NGHIEP' => $request->NNGHIEP,
            'FK_MA_LOAI_HDONG' => $request->LOAI_HD,
            'HD_TU_NGAY' => $request->HD_TU,
            'HD_DEN_NGAY' => $request->HD_DEN,
            'HD_FK_MA_BO_MON' => $request->BO_MON,
            'CHUC_DANH_CHUYEN_MON' => $request->CDANH_CM,
            'FK_MA_CHUC_VU' => $request->CV,
            'CV_PHAI_LAM' => $request->CVIEC_PL,
            'THOI_GIAN_LAM_VIEC' => $request->TG_LVIEC,
            'DCU_LAM_VIEC_CAP_PHAT' => $request->CPHAT,
            'PHUONG_TIEN_DI_LAI' => $request->PTIEN_DL,
            'NGACH' => $request->NGACH,
            'BAC' => $request->BAC_L,
            'HE_SO_LUONG' => $request->HSO_L,
            'HINH_THUC_TRA_LUONG' => $request->HTHUC_TL,
            'PHU_CAP_GOM' => $request->PCAP,
            'THOI_GIAN_TRA_LUONG' => $request->TG_TLUONG,
            'TIEN_THUONG' => $request->TIEN_T,
            'CHE_DO_NANG_LUONG' => $request->CDO_NL,
            'BAO_HO_LDONG' => $request->BHO_LD,
            'CHE_DO_NGHI_NGOI' => $request->CDO_NN,
            'BHXH_BHYT' => $request->BHIEM,
            'CHE_DO_DAO_TAO' => $request->CDO_DT,
            'QUYEN_LOI_DUOC_HUONG' => $request->QLOI_DH,
            'NHUNG_THOA_THUAN_KHAC' => $request->TTHUAN_K,
            'BOI_THUONG' => $request->BTHUONG,
            'HDLD_LAM_TAI' => $request->HD_LTAI,
            'GHI_CHU' => $request->GCHU,
            'NGAY_KY' => $request->NKY,
            'THU_VIEC_TU_NGAY' => $request->TV_TU,
            'THU_VIEC_DEN_NGAY' => $request->TV_DEN,
            'C85_PHAN_TRAM' => NULL,
            'SO_HOP_DONG' => $request->MA_HDLD,
            'NOI_DANG_KY_BHYT' => $request->NOI_DK_BH,
            'HE_SO_LUONG_IN' => $request->HSO_L,
            'LOAI_HOP_DONG' => $request->LOAI_HD,
            'CAN_CU_1' => NULL,
            'CAN_CU_2' => NULL,
            'HUONG_KHOAN_THUONG' => NULL,
            'BHYT_HDLV' => NULL,
            'DON_VI_LAM_VIEC_IN' => NULL,
            'FK_ID_NGACH' => $request->NGACH,
        ]);
        return redirect('/quanlyHDLD');
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
        DB::delete('delete HOP_DONG_LAO_DONG where MA_SO_HDONG_LDONG = ?', [$id]);
        return redirect('/quanlyHDLD');
    }
}