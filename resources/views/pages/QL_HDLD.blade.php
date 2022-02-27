@extends('layouts.main')
@section('content')
    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Tổng quát</span>
                <h3 class="page-title">Quản lý hợp đồng lao động</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        {{-- <h6 class="m-0" style="display: inline-block">Active Users</h6> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-add" data-toggle="modal" data-target="#modelId"
                            onclick="resetForm()">
                            Thêm
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="width: 60rem;transform: translate(-15%,15%);">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Thêm hợp đồng lao động</h5>
                                        <button class="btn btn-primary btn-print" style="margin-left: auto; display: none"
                                            data-toggle="modal" data-target="#printModel" onclick="printContract()">In hợp
                                            đồng</button>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            style="margin-left:0">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                            <form class="form" name="addContract"
                                                action="{{ url('quanlyHDLD') }}" method="POST"
                                                style="height: 20rem;overflow: auto">
                                                <span id="methodPut" style="display: none">
                                                    @method('put')
                                                </span>
                                                @csrf
                                                <div class="row" style="margin-right: 0;">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Mã số hợp đồng lao động</label>
                                                            <input type="text" name="MA_HDLD" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row justify-between" style="margin-right: 0 !important">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Bên A</label>
                                                            <input type="text" name="BEN_A" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Chức vụ</label>
                                                            <input type="text" name="BEN_A_CV" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Đại diện cho</label>
                                                            <input type="text" name="BEN_A_DD" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">Điện thoại</label>
                                                                    <input type="text" name="BEN_A_DT" id=""
                                                                        class="form-control" placeholder=""
                                                                        aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">Quốc tịch</label>
                                                                    <select name="BEN_A_QT" class="form-control">
                                                                        <option value="Việt Nam">Việt Nam</option>
                                                                        <option value="American">American</option>
                                                                        <option value="England">England</option>
                                                                    </select>
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Bên B</label>
                                                            <input type="text" name="BEN_B" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">Mã cán bộ</label>
                                                                    <input type="text" name="MA_CB" id=""
                                                                        class="form-control" placeholder=""
                                                                        aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">Nghề nghiệp</label>
                                                                    <input type="text" name="NN" id=""
                                                                        class="form-control" placeholder=""
                                                                        aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Loại hợp đồng</label>
                                                            <select class="form-control" name="LOAI_HD" id="L_HD">
                                                                <option></option>
                                                                @foreach ($typeContract as $item)
                                                                    <option value="{{ $item->MA_LOAI_HDONG }}">
                                                                        {{ $item->TEN_LOAI_HDONG . '(' . $item->SO_THANG . ')' }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">HĐ từ ngày</label>
                                                                    <input type="date" name="HD_TU" id=""
                                                                        class="form-control" placeholder=""
                                                                        aria-describedby="helpId" onchange="addDays()">
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">HĐ đến ngày</label>
                                                                    <input type="date" name="HD_DEN" id=""
                                                                        class="form-control" placeholder=""
                                                                        aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">Khoa</label>
                                                                    <select class="form-control" name="BO_MON" id="">
                                                                        <option value=""></option>
                                                                        <option value="THTNMT">Khoa môi trường</option>
                                                                        <option value="CNPM">Khoa HTTTVT</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label for="">Bộ môn</label>
                                                                    <select class="form-control" name="BO_MON" id="">
                                                                        <option value=""></option>
                                                                        <option value="THTNMT">Tin học TNMT</option>
                                                                        <option value="CNPM">Công nghệ phần mềm </option>
                                                                        <option value="HTTT">Hệ thống thông tin</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Chức danh chuyên môn</label>
                                                            <input type="text" name="CDANH_CM" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <label for="">Phường - Xã</label>
                                                                    <select class="form-control" name="PX" id="">
                                                                        <option></option>
                                                                        @foreach ($px as $item2)
                                                                            <option value="{{ $item2->MA_PHUONG_XA }}">
                                                                                {{ $item2->TEN_PHUONG_XA }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <label for="">Quận - Huyện</label>
                                                                    <select class="form-control" name="QH" id="">
                                                                        <option></option>
                                                                        @foreach ($qh as $item3)
                                                                            <option value="{{ $item3->MA_QUAN_HUYEN }}">
                                                                                {{ $item3->TEN_QUAN_HUYEN }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <label for="">Tỉnh - TP</label>
                                                                    <select class="form-control" name="TP" id="">
                                                                        <option></option>
                                                                        @foreach ($tp as $item4)
                                                                            <option value="{{ $item4->MA_TINH_TP }}">
                                                                                {{ $item4->TEN_TINH_TP }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Hộ khẩu thường trú</label>
                                                            <input type="text" name="DIACHI" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <label for="">Ngạch</label>
                                                                    <select class="form-control" name="NGACH" id=""
                                                                        onchange="SalaryLevel()">
                                                                        <option></option>
                                                                        @foreach ($quantum as $item5)
                                                                            <option value="{{ $item5->ID_NGACH }}">
                                                                                {{ $item5->MA_SO_NGACH }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <label for="">Bậc lương</label>
                                                                    <select class="form-control" name="BAC_L" id=""
                                                                        onchange="salary()">
                                                                        {{-- <option></option> --}}
                                                                        {{-- @foreach ($bl as $item6)
                                                                            <option value="{{ $item6->BAC }}">
                                                                                {{ $item6->BAC . ' ( ' . $item6->HE_SO_LUONG . ' )' }}
                                                                            </option>
                                                                        @endforeach --}}
                                                                    </select>
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <label for="">Hệ số lương</label>
                                                                    <input type="text" name="HSO_L" id=""
                                                                        class="form-control" placeholder=""
                                                                        aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Phương tiện đi lại</label>
                                                            <input type="text" name="PTIEN_DL" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Hình thức trả lương</label>
                                                            <input type="text" name="HTHUC_TL" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Thời gian trả lương</label>
                                                            <input type="text" name="TG_TLUONG" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Chế độ nâng lương</label>
                                                            <input type="text" name="CDO_NL" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Tiền thưởng</label>
                                                            <input type="text" class="form-control" name="TIEN_T" id="">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Phụ cấp</label>
                                                            <input type="text" class="form-control" name="PCAP" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Thời gian làm việc</label>
                                                            <input type="text" class="form-control" name="TG_LVIEC"
                                                                id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Công việc phải làm</label>
                                                            <input type="text" class="form-control" name="CVIEC_PL"
                                                                id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <div class="form-group">
                                                                    <label for="">BHXH-BHYT</label>
                                                                    <input type="text" class="form-control" name="BHIEM"
                                                                        id="">
                                                                </div>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="form-group">
                                                                    <label for="">Nơi đăng ký BHYT</label>
                                                                    <input type="text" name="NOI_DK_BH" id=""
                                                                        class="form-control" placeholder=""
                                                                        aria-describedby="helpId">
                                                                    <small id="helpId" class="text-muted"></small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Chế độ đào tạo</label>
                                                            <input type="text" class="form-control" name="CDO_DT" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Bảo hộ lao động</label>
                                                            <input type="text" name="BHO_LD" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Chế độ nghỉ ngơi</label>
                                                            <input type="text" class="form-control" name="CDO_NN" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Quyền lợi được hưởng</label>
                                                            <input type="text" class="form-control" name="QLOI_DH" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Những thỏa thuận khác</label>
                                                            <input type="text" class="form-control" name="TTHUAN_K"
                                                                id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Bồi thường</label>
                                                            <input type="text" class="form-control" name="BTHUONG" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Ghi chú</label>
                                                            <input type="text" class="form-control" name="GCHU" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Cấp phát</label>
                                                            <input type="text" class="form-control" name="CPHAT" id="">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Thử việc từ ngày</label>
                                                            <input type="date" name="TV_TU" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId"
                                                                onchange="probation()">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Thử việc đến ngày</label>
                                                            <input type="date" name="TV_DEN" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Hợp đồng làm tại</label>
                                                            <input type="text" name="HD_LTAI" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Ngày ký</label>
                                                            <input type="date" name="NKY" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="reset" class="btn btn-reset" style="display: none"></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                        <button type="button" class="btn btn-success btn-submit"
                                            onclick="submit()">Thêm</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- modal print contract --}}
                        <div class="modal fade" id="printModel" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="width: 60rem;transform: translate(-15%,15%);">
                                    <div class="modal-header">
                                        <h5 class="modal-title">In hợp đồng lao động</h5>
                                        {{-- <button class="btn btn-primary" style="margin-left: auto;" data-toggle="modal"
                                            data-target="#printModel">In hợp đồng</button> --}}
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close" style="margin-left:0">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="overflow: auto;height: 25rem;">
                                        <div class="container-fluid">
                                            {{-- <textarea
                                                id="contractEditor"><h2 style="text-align: center">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h2><h4 style="text-align: center">Độc lập - Tự do - Hạnh phúc</h4><p style="text-align: end">.....,ngày ..... tháng ..... năm .....</p><h3 style="text-align: center">HỢP ĐỒNG LAO ĐỘNG</h3><p style="text-align: center">Số: </p><p>Căn cứ Bộ luật Lao động </p>  <p> Căn cứ nhu cầu và năng lực của hai bên</p> <p>Hôm nay, tại</p> <p> Chúng tôi gồm: </p> <p> <span style="font-weight: 600">BÊN A (NGƯỜI SỬ DỤNG LAO ĐỘNG): </span> <span id="BEN_ACT">.........................................</span> </p> <p> <span >Đại diện:.....................................................................................</span> <span >Chức vụ:.....................................................................................</span>  </p> <p> Quốc tịch: </p> <p> Địa chỉ: </p> <p> Điện thoại: </p> <p>  <span style="font-weight: 600">BÊN B (NGƯỜI LAO ĐỘNG): </span> <span id="BEN_BCT">.....................................</span> </p>  <p> <span>Trình độ:..................................................................</span> <span >Chuyên ngành:.....................................................................................</span> </p>  <p> Sau khi thỏa thuận, hai bên thống nhất ký Hợp đồng lao động (HĐLĐ) với các điều khoản sau đây:  </p> <p> <span style="font-weight: 600">Điều 1: Điều khoản chung</span> </p> <p> 1. Loại HĐLĐ:  </p> <p> 2. Thời hạn HĐLĐ: </p><p> 3. Thời điểm bắt đầu: </p><p> 4. Thời điểm kết thúc (nếu có): </p> <p>5. Địa điểm làm việc: </p>  <p> 6. Bộ phận công tác: </p><p> 7. Chức danh chuyên môn (vị trí công tác): </p><p>  8. Nhiệm vụ công việc như sau: </p><p> <span style="font-weight: 600">Điều 2: Chế độ làm việc</span> </p><p> 1. Thời gian làm việc: </p><p> 2. Do tính chất công việc, nhu cầu kinh doanh hay nhu cầu của tổ chức/bộ phận, Công ty có thể cho áp dụng thời gian làm việc linh hoạt. Những người được áp dụng thời gian làm việc linh hoạt có thể không tuân thủ lịch làm việc cố định bình thường mà làm theo ca, nhưng vẫn phải đảm bảo đủ số giờ làm việc theo quy định.  </p> <p> 3. Thiết bị và công cụ làm việc được Công ty cấp phát </p><p> 4. Điều kiện an toàn và vệ sinh lao động tại nơi làm việc </p> <p> <span style="font-weight: 600">Điều 3: Quyền và nghĩa vụ của người lao động</span> </p>  <p>   1. Quyền của người lao động </p>  <p> a) Tiền lương và phụ cấp: </p> <p> - Mức lương/Thù lao chính: …...…. VNĐ/tháng. </p> <p> - Hình thức trả lương: </p> <p> - Phụ cấp </p> <p> b) Các quyền lợi khác: </p> <p> - Khen thưởng: </p><p>- Chế độ nâng lương: </p><p>- Chế độ nghỉ: </p><p> 2. Nghĩa vụ của người lao động </p><p> a) Thực hiện công việc với hiệu quả cao nhất theo sự phân công, điều hành của người có thẩm quyền. </p> <p> b) Hoàn thành công việc được giao và sẵn sàng chấp nhận mọi sự điều động khi có yêu cầu. </p> <p> c) Nắm rõ và chấp hành nghiêm túc kỷ luật lao động, an toàn lao động, vệ sinh lao động, phòng cháy chữa cháy, văn hóa công ty, nội quy lao động và các chủ trương, chính sách của Công ty. </p> <p> d) Bồi thường vi phạm và vật chất theo quy chế, nội quy của Công ty và pháp luật Nhà nước quy định. </p> <p> e) Tham dự đầy đủ, nhiệt tình các buổi huấn luyện, đào tạo, hội thảo do Bộ phận hoặc Công ty tổ chức. </p><p>f) Thực hiện đúng cam kết trong hợp đồng lao động và các thỏa thuận bằng văn bản khác với Công ty. </p><p> g) Tuyệt đối thực hiện cam kết bảo mật thông tin. </p><p> h) Đóng các loại bảo hiểm, thuế, phí đầy đủ theo quy định của pháp luật. </p><p> <span style="font-weight: 600">Điều 4: Quyền và nghĩa vụ của người sử dụng lao động</span> </p><p>1. Quyền của người sử dụng lao động </p> <p>a) Điều hành người lao động hoàn thành công việc theo Hợp đồng (bố trí, điều chuyển công việc cho người lao động theo đúng chức năng chuyên môn). </p><p>b) Có quyền tạm thời chuyển người lao động sang làm công việc khác, ngừng việc và áp dụng các biện pháp kỷ luật theo quy định của pháp luật hiện hành và theo nội quy Công ty trong thời gian Hợp đồng còn giá trị. </p><p>c) Tạm hoãn, chấm dứt Hợp đồng, kỷ luật người lao động theo đúng quy định của pháp luật và nội quy Công ty. </p><p>d) Có quyền đòi bồi thường, khiếu nại với cơ quan liên đới để bảo vệ quyền lợi của mình nếu người lao động vi phạm pháp luật hay các điều khoản của hợp đồng này. </p><p> 2. Nghĩa vụ của người sử dụng lao động </p><p> - Thực hiện đầy đủ những điều kiện cần thiết đã cam kết trong Hợp đồng lao động để người lao động đạt hiệu quả công việc cao. Bảo đảm việc làm cho người lao động theo Hợp đồng đã ký. </p><p> - Thanh toán đầy đủ, đúng thời hạn các chế độ và quyền lợi cho người lao động. </p><p> <span style="font-weight: 600">Điều 5: Những thỏa thuận khác</span> </p><p> <span style="font-weight: 600">Điều 6: Điều khoản thi hành</span> </p><p>Những vấn đề về lao động không ghi trong Hợp đồng này thì áp dụng theo quy định của thỏa ước tập thể, nội quy lao động và pháp luật lao động. </p><p> Khi hai bên ký kết Phụ lục Hợp đồng lao động thì nội dung của Phụ lục Hợp đồng lao động cũng có giá trị như các nội dung của bản hợp đồng này. </p> <p> Hợp đồng này được lập thành …… bản có giá trị pháp lý như nhau, mỗi bên giữ ..….. bản./. </p><p> <span style="font-weight: 600"> NGƯỜI SỬ DỤNG LAO ĐỘNG  </span> <span style="font-weight: 600; float: right"> NGƯỜI LAO ĐỘNG</span> </p><p> <span style="font-weight: 600"> (Ký và ghi rõ họ tên)  </span> <span style="font-weight: 600; float: right"> (Ký và ghi rõ họ tên)</span> </p></textarea> --}}
                                            <textarea id="contractEditor"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                        {{-- <button type="button" class="btn btn-success btn-submit"
                                            onclick="submit()">Thêm</button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="contractContent" style="display: none">
                            <p style="text-align: center;" data-mce-style="text-align: center;"><span
                                    style="font-size: 14pt;" data-mce-style="font-size: 14pt;"><strong>CỘNG HÒA XÃ HỘI CHỦ
                                        NGHĨA VIỆT NAM</strong></span><br><span style="font-size: 14pt;"
                                    data-mce-style="font-size: 14pt;"><strong>Độc lập - Tự do - Hạnh
                                        phúc&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><strong>Trường Đại học Tài Nguyên Và Môi Trường
                                        TPHCM</strong></span><br><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Số:/HĐLĐ</span></p>
                            <p style="text-align: center;" data-mce-style="text-align: center;"><span
                                    style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><span
                                        style="font-size: 18pt;" data-mce-style="font-size: 18pt;"><strong>HỢP ĐỒNG LAO
                                            ĐỘNG</strong></span>&nbsp;</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Chúng tôi gồm một bên là Ông <strong><span
                                            style="font-size: 12pt;" data-mce-style="font-size: 12pt;"
                                            id="bena">&nbsp;&nbsp;</span></strong>
                                    <span style="font-size: 12pt;float: right;" data-mce-style="font-size: 12pt;">Quốc tịch:
                                        <strong id="quoctich">&nbsp;&nbsp;</strong></span></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Chức vụ: <strong
                                        id="chucvu">&nbsp;&nbsp;</strong></span>
                                <span style="font-size: 12pt;float: right;" data-mce-style="font-size: 12pt;">Điện thoại:
                                    <strong id="dienthoai">&nbsp;&nbsp;</strong></span><span
                                    style="font-size: 12pt;float: right;"
                                    data-mce-style="font-size: 12pt;"><strong></strong></span>
                            </p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Đại diện cho: <strong
                                        id="daidien">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Địa chỉ:<strong id="diachi">
                                        &nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Và một bên là Ông:<strong id="benb">
                                        &nbsp;&nbsp;</strong>
                                    <span
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ">SHCC:
                                        <strong
                                            style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    margin-right: 5rem;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ">000482</strong>
                                        LOẠI:
                                        <strong>BC</strong></span></span>
                            </p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Nghề nghiệp: <strong
                                        id="nghenghiep">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Hộ khẩu thường trú:<strong id="diachi_benb">
                                        &nbsp;&nbsp;</strong></span>
                            </p>
                            <p style="text-align: center;" data-mce-style="text-align: center;"><span
                                    style="font-size: 12pt;" data-mce-style="font-size: 12pt;">Thỏa thuận ký kết hợp đồng
                                    lao động và cam kết làm đúng những điều khoản
                                    sau đây:</span></p>
                            <p style="text-align: center;" data-mce-style="text-align: center;"><span
                                    style="font-size: 14pt;" data-mce-style="font-size: 14pt;"><strong>Điều 1: THỜI HẠN VÀ
                                        CÔNG VIỆC HỢP ĐỒNG</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Loại hợp đồng lao động: <strong
                                        id="loaihopdong">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Từ ngày: <strong id="batdau">&nbsp;&nbsp;</strong> Đến
                                    ngày:
                                    <strong id="ketthuc">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Đơn vị: <strong
                                        id="donvi">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Chức danh chuyên môn: <strong
                                        id="chucdanhchuyenmon">&nbsp;&nbsp;</strong>
                                    &nbsp; &nbsp;Chức vụ:
                                    <strong id="chucvu">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Công việc phải làm: <strong
                                        id="nhiemvucongviec">&nbsp;&nbsp;</strong>
                                </span></p>
                            <p style="text-align: center;" data-mce-style="text-align: center;"><span
                                    style="font-size: 14pt;" data-mce-style="font-size: 14pt;"><strong>Điều 2: CHẾ ĐỘ LÀM
                                        VIỆC</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Thời gian làm việc: <strong
                                        id="thoigianlamviec">&nbsp;&nbsp;</strong><br data-mce-bogus="1"></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Được cấp phát những dụng cụ lao động: <strong
                                        id="cculaodong">&nbsp;&nbsp;</strong> </span></p>
                            <p style="text-align: center;" data-mce-style="text-align: center;"><span
                                    style="font-size: 14pt;" data-mce-style="font-size: 14pt;"><strong>Điều 3: NGHĨA VỤ VÀ
                                        QUYỀN LỢI CỦA NGƯỜI LAO ĐỘNG</strong></span>
                            </p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><strong>1.Quyền lợi:</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Phương tiện đi lại làm việc: <strong
                                        id="phuongtiendilai">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Mức lương chính hoặc tiền công:&nbsp;</span></p>
                            <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                    style="font-size: 12pt;" data-mce-style="font-size: 12pt;">&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;Mã ngạch: <strong id="mangach">&nbsp; &nbsp;</strong></span></p>
                            <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                    style="font-size: 12pt;" data-mce-style="font-size: 12pt;">&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;HS Lương: <strong id="hesoluong">&nbsp; &nbsp;
                                    </strong><strong>đồng/tháng</strong></span></p>
                            <p style="text-align: justify;" data-mce-style="text-align: justify;"><span
                                    style="font-size: 12pt;" data-mce-style="font-size: 12pt;">&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;Mốc tính nâng lương: <strong id="batdau">&nbsp; &nbsp;</strong></span><span
                                    style="font-size: 12pt;" data-mce-style="font-size: 12pt;"><strong></strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Hình thức trả lương: <strong
                                        id="hinhthuctraluong">&nbsp;
                                        &nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Phụ cấp gồm: <strong id="phucap">&nbsp;
                                        &nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Được trả lương vào các ngày hàng tháng: 25</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Tiền thưởng: <strong id="khenthuong">&nbsp;
                                        &nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Chế độ nâng lương: <strong id="chedonangluong">&nbsp;
                                        &nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Được trang bị thiết bị bảo hộ lao động gồm: <strong
                                        id="cculaodong">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Chế độ nghỉ ngơi: <strong
                                        id="chedonghingoi">&nbsp;&nbsp;</strong></span>
                            </p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">BHXH, BHYT và Bảo hiểm thất nghiệp: <strong
                                        id="baohiem">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Chế độ đào tạo: <strong
                                        id="chedodaotao">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Những thỏa thuận khác: <strong
                                        id="nhungthoathuankhac">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><strong>2.Nghĩa vụ:</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Hoàn thành những công việc đã cam kết trong hợp đồng
                                    lao động.</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Chấp hành lệnh điều hành sản xuất - kinh doanh, nội
                                    quy kỷ luật lao động,
                                    an toàn lao động,...</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Bồi thường vi phạm và vật chất: <strong
                                        id="boithuong">&nbsp;&nbsp;</strong></span></p>
                            <p style="text-align: center;" data-mce-style="text-align: center;"><span
                                    style="font-size: 14pt;" data-mce-style="font-size: 14pt;"><strong>Điều 4: NGHĨA VỤ VÀ
                                        QUYỀN LỢI CỦA NGƯỜI SỬ DỤNG LAO
                                        ĐỘNG</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><strong>1.Nghĩa vụ:</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Bảo đảm việc làm và thực hiện đầy đủ những điều đã cam
                                    kết trong hợp đồng
                                    lao động.</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Thanh toán đầy đủ, đúng thời hạn các chế độ và quyền
                                    lợi cho người lao
                                    động theo hợp đồng lao động, thỏa ước lao động tập thể (nếu
                                    có).<strong>&nbsp;</strong><br></span><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><strong>2.Quyền hạn:</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Điều hành người lao động hoàn thành công việc theo hợp
                                    đồng (bố trí, điều
                                    chuyển, tạm ngừng việc...).&nbsp;</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Tạm hoãn, chấm dứt hợp đồng lao động, kỷ luật người
                                    lao động theo quy định
                                    của pháp luật, thỏa ước lao động tập thể (nếu có) và nội quy lao động của doanh
                                    nghiệp.&nbsp;</span></p>
                            <p style="text-align: center;" data-mce-style="text-align: center;"><span
                                    style="font-size: 14pt;" data-mce-style="font-size: 14pt;"><strong>Điều 5: ĐIỀU KHOẢN
                                        THI HÀNH</strong></span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Những vấn đề về lao động không ghi trong hợp đồng lao
                                    động này thì áp dụng
                                    quy định của thỏa ước tập thể, trường hợp chưa có thỏa ước tập thể thì áp dụng quy định
                                    của pháp
                                    luật.</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Hợp đồng lao động được làm thành 02 bản có giá trị
                                    ngang nhau, mỗi bên giữ
                                    một bản và có hiệu lực từ ngày: <strong id="ngayky">&nbsp;&nbsp;</strong>. Khi hai bên
                                    ký kết phụ lục
                                    hợp đồng lao động
                                    thì nội dung của phụ lục hợp đồng lao động cũng có giá trị như các nội dung của bản hợp
                                    đồng này.</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;">Hợp đồng này làm tại: <strong
                                        id="hopdonglamtai">&nbsp;&nbsp;</strong>
                                    ngày
                                    <strong id="ngayky">&nbsp;&nbsp;</strong>&nbsp;</span></p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><strong
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    margin-left: 6rem;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ">Người
                                        lao
                                        động
                                    </strong>
                                    <strong
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    margin-right: 6rem;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ">Người
                                        sử
                                        dụng
                                        lao
                                        động</strong></span>
                            </p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><span
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "><strong><br
                                                data-mce-bogus="1"></strong></span></span>
                            </p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><span
                                        style="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                "><strong><br
                                                data-mce-bogus="1"></strong></span></span>
                            </p>
                            <p style="text-align: left;" data-mce-style="text-align: left;"><span style="font-size: 12pt;"
                                    data-mce-style="font-size: 12pt;"><span style="font-size: 12pt;float: right;"
                                        data-mce-style="font-size: 12pt;"><strong><br
                                                data-mce-bogus="1"></strong></span></span></p>
                        </div>

                        {{-- modal extend contract --}}
                        <div class="modal fade" id="modelExtend" tabindex="-1" role="dialog"
                            aria-labelledby="modelTitleId" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content" style="width: 60rem;transform: translate(-15%,15%);">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Gia hạn hợp đồng lao động</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close" style="margin-left:0">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="overflow: auto;height: 25rem;">
                                        <div class="container-fluid">
                                            <form class="form fExtendContract" name="extendContractForm"
                                                action="{{ url('quanlyHDLD/giahan') }}" method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Mã hợp đồng</label>
                                                            <input type="text" name="MA_SO_HDONG_LDONG" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Mã gia hạn</label>
                                                            <input type="text" name="FK_ID_QT_CTAC_NUOC_NGOAI" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Lần gia hạn</label>
                                                            <input type="text" name="LAN_GIA_HAN" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Từ ngày</label>
                                                            <input type="date" name="TU_NGAY" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">đến ngày</label>
                                                            <input type="date" name="DEN_NGAY" id="" class="form-control"
                                                                placeholder="" aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Ghi chú</label>
                                                            <textarea class="form-control" name="GHI_CHU" id=""
                                                                rows="9"></textarea>
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="">Số quyết định</label>
                                                            <input type="text" name="SO_QUYET_DINH" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Ngày quyết định</label>
                                                            <input type="date" name="NGAY_QUYET_DINH" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Ngày cập nhật</label>
                                                            <input type="date" name="NGAY_CAP_NHAT" id=""
                                                                class="form-control" placeholder=""
                                                                aria-describedby="helpId">
                                                            <small id="helpId" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                                        <button type="button" class="btn btn-success btn-submit"
                                            onclick="extendContract()">Gia hạn</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display: inline-block; position: relative;float: right;">
                            <i class="material-icons"
                                style="font-size: 1.2rem;position: absolute;top: 0.3rem;right: 0.3rem;background: white;">search</i>
                            <input type="text" name="" id="searchInp">
                        </div>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">Mã số HĐLĐ </th>
                                    <th scope="col" class="border-0">Mã cán bộ</th>
                                    <th scope="col" class="border-0">Tên cán bộ</th>
                                    <th scope="col" class="border-0">HĐ từ ngày</th>
                                    <th scope="col" class="border-0">HĐ đến ngày</th>
                                    <th scope="col" class="border-0">Chức danh chuyên môn</th>
                                    <th scope="col" class="border-0">Tình trạng </th>
                                    <th scope="col" class="border-0">Hành động</th>
                                </tr>
                                {{-- <tr class="add add-hidden">
                                    <form action="{{ url('ngach') }}" method="POST">
                                        @csrf
                                        <td>Thêm</td>
                                        <td><input type="text" name="ID_N" style="width: 7rem"></td>
                                        <td><input type="text" name="MA_N" style="width: 7rem"></td>
                                        <td><input type="text" name="NHOM" style="width: 7rem"></td>
                                        <td><input type="text" name="TEN_N" style="width: 7rem"></td>
                                        <td><input type="text" name="SO_NAM_NB" style="width: 7rem"></td>
                                        <td><input type="text" name="TU_VT" style="width: 7rem"></td>
                                        <td><input type="text" name="TT_UU_TIEN" style="width: 7rem"></td>
                                        <td>
                                            <button type="submit" class="btn btn-success">Thêm</button>
                                        </td>
                                    </form>
                                </tr> --}}
                            </thead>
                            <tbody>
                                @foreach ($contract as $key => $item)
                                    <tr class="bdy">
                                        <td>{{ $key + 1 }}
                                        </td>
                                        <form action="" name="fUpdate" method="POST">
                                            @method('put')
                                            @csrf
                                            <td>
                                                <input type="text" class="inline-update none-update" name="MA_HDLD"
                                                    value="{{ $item->MA_SO_HDONG_LDONG }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="BEN_A"
                                                    value="{{ $item->MA_CAN_BO }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="BEN_B"
                                                    value="{{ $item->BEN_B }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="HD_TU"
                                                    value="{{ $item->HD_TU_NGAY }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="HD_DEN"
                                                    value="{{ $item->HD_DEN_NGAY }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="CD_CM"
                                                    value="{{ $item->CHUC_DANH_CHUYEN_MON }}" style="width: 7rem"
                                                    readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="CD_CM"
                                                    value="{{ $item->TINH_TRANG_HD }}" style="width: 7rem" readonly>
                                            </td>
                                        </form>
                                        <td>
                                            <div class="update-btn">
                                                <button class="btn btn-success"
                                                    onclick="btnUpdate({{ $key + 1 }})">Cập
                                                    nhật</button>
                                                <button class="btn btn-danger"
                                                    onclick="btnCancleUpdate({{ $key + 1 }})">Hủy</button>
                                            </div>
                                            <div class="dropdown open">
                                                <button class="btn dropdown-toggle btn-action" type="button" id="triggerId"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons"
                                                        style="font-size: 1.2rem;transform: translate(50%, -50%);color: black;">clear_all</i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="triggerId" style="left:-2rem">
                                                    <button class="dropdown-item " href="#"
                                                        onclick="updateContract('{{ $item->MA_SO_HDONG_LDONG }}')">Cập
                                                        nhật</button>
                                                    {{-- <button type="button" class="dropdown-item " data-toggle="modal"
                                                        data-target="#modelExtend"
                                                        onclick="btnExtendContract('{{ $item->MA_SO_HDONG_LDONG }}')">
                                                        Gia hạn
                                                    </button> --}}
                                                    <button class="dropdown-item "><a
                                                            href="{{ url('quanlyHDLD/destroy') . '/' . $item->MA_SO_HDONG_LDONG }}"
                                                            style="display: inline-block;width: 100%;color:black;">Xóa</a>
                                                    </button>
                                                    {{-- <button class="dropdown-item disabled" href="#">Disabled
                                                        action</button> --}}
                                                </div>
                                            </div>
                                        <td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function submit() {
            document.forms['addContract'].submit()
        }

        function resetForm() {
            document.querySelector('.btn-print').style.display = 'none';
            document.querySelector('.modal-title').innerText = 'Thêm hợp đồng lao động'
            document.querySelector('.modal-footer .btn-submit').innerText = 'Thêm'
            // document.querySelector('#methodPut').innerHTML = ''
            document.forms['addContract']['_method'].value = 'post'
            document.querySelector('.btn-reset').click();
        }

        function btnExtendContract(index) {
            $.ajax({
                url: 'quanlyHDLD/' + index,
                type: 'GET',
            }).done(function(result) {
                document.forms["extendContractForm"]['MA_SO_HDONG_LDONG'].value = result[0].MA_SO_HDONG_LDONG
            })
        }

        function SalaryLevel() {
            index = document.forms['addContract']['NGACH'].value;
            $.ajax({
                url: 'bacluong/' + index,
                type: 'GET',
            }).done(function(result) {
                data = JSON.parse(result).data;
                opt = '<option></option>';
                data.forEach(e => {
                    opt += '<option value="' + e.BAC + '"> ' + e.HE_SO_LUONG + ' </option>';
                })
                document.forms["addContract"]['BAC_L'].innerHTML = opt;
            })
        }

        function salary() {
            level = document.forms['addContract']['BAC_L'].innerText;
            // console.log(parseFloat(level) * parseFloat(1490000));
            document.forms['addContract']['HSO_L'].value = parseFloat(level) * parseFloat(1490000);
        }

        function extendContract() {
            document.forms['extendContractForm'].submit()
        }
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });


        function addDays() {
            date = document.forms['addContract']['HD_TU'].value;
            console.log(date);
            days = document.forms['addContract']['LOAI_HD'].value;
            days = document.querySelectorAll('#L_HD option[value="' + days + '"]')[0].text
            days = days.substring(days.indexOf('(') + 1, days.indexOf(')'))
            // console.log(days);
            days = days * 30;
            var result = new Date(date);

            // result.setMonth(result.getMonth() + days);
            result.setDate(result.getDate() + days);
            // return result;
            console.log(result);
            document.forms['addContract']['HD_DEN'].value = result.toLocaleDateString("en-CA");
        }

        function probation() {
            date = document.forms['addContract']['TV_TU'].value;
            var result = new Date(date);
            // result.setMonth(result.getMonth() + 2);
            result.setDate(result.getDate() + 60);
            // return result;
            document.forms['addContract']['TV_DEN'].value = result.toLocaleDateString("en-CA");
        }
    </script>
@endsection
