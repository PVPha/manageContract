@extends('layouts.main')
@section('content')
    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Tổng quát</span>
                <h3 class="page-title">Loại hợp đồng</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <button class="btn btn-primary btn-add" onclick="add()">Thêm</button>
                        {{-- <h6 class="m-0" style="display: inline-block">Active Users</h6> --}}
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
                                    <th scope="col" class="border-0">Mã loại HĐ</th>
                                    <th scope="col" class="border-0">Tên loại HĐ</th>
                                    <th scope="col" class="border-0">Từ viết tắt</th>
                                    <th scope="col" class="border-0">Số tháng</th>
                                    <th scope="col" class="border-0">Hành động</th>
                                </tr>
                                <tr class="add add-hidden">
                                    <form action="{{ url('loaiHD') }}" method="POST">
                                        @csrf
                                        <td>Thêm</td>
                                        <td><input type="text" name="MA_LHD"></td>
                                        <td><input type="text" name="TEN_LHD"></td>
                                        <td><input type="text" name="TU_VT"></td>
                                        <td><input type="text" name="SO_T"></td>
                                        <td>
                                            <button type="submit" class="btn btn-success">Thêm</button>
                                        </td>
                                    </form>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr class="bdy">
                                        <td>{{ $key + 1 }}
                                        </td>
                                        <form action="{{ url('loaiHD/update') }}" name="fUpdate" method="POST">
                                            @method('put')
                                            @csrf
                                            <td>
                                                <input type="text" class="inline-update none-update" name="MA_LHD"
                                                    value="{{ $item->MA_LOAI_HDONG }}" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="TEN_LHD"
                                                    value="{{ $item->TEN_LOAI_HDONG }}" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="TU_VT"
                                                    value="{{ $item->TU_VIET_TAT }}" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="SO_T"
                                                    value="{{ $item->SO_THANG }}" readonly>
                                            </td>
                                        </form>
                                        <td>
                                            <div class="update-btn">
                                                <button class="btn btn-success" onclick="btnUpdate({{ $key + 1 }})">Cập
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
                                                        onclick="update({{ $key + 1 }})">Cập
                                                        nhật</button>
                                                    <button class="dropdown-item "><a
                                                            href="{{ url('loaiHD/destroy') . '/' . $item->MA_LOAI_HDONG }}"
                                                            style="display: inline-block;width: 100%;color:black;">Xóa</a>
                                                    </button>
                                                    <button class="dropdown-item disabled" href="#">Disabled
                                                        action</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Default Light Table -->
        <!-- Default Dark Table -->
        {{-- <div class="row">
            <div class="col">
                <div class="card card-small overflow-hidden mb-4">
                    <div class="card-header bg-dark">
                        <h6 class="m-0 text-white">Inactive Users</h6>
                    </div>
                    <div class="card-body p-0 pb-3 bg-dark text-center">
                        <table class="table table-dark mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="border-bottom-0">#</th>
                                    <th scope="col" class="border-bottom-0">First Name</th>
                                    <th scope="col" class="border-bottom-0">Last Name</th>
                                    <th scope="col" class="border-bottom-0">Country</th>
                                    <th scope="col" class="border-bottom-0">City</th>
                                    <th scope="col" class="border-bottom-0">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Graham</td>
                                    <td>Brent</td>
                                    <td>Benin</td>
                                    <td>Ripabottoni</td>
                                    <td>1-512-760-9094</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Clark</td>
                                    <td>Angela</td>
                                    <td>Estonia</td>
                                    <td>Borghetto di Vara</td>
                                    <td>1-660-850-1647</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Wylie</td>
                                    <td>Joseph</td>
                                    <td>Korea, North</td>
                                    <td>Guelph</td>
                                    <td>325-4351</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Garth</td>
                                    <td>Clementine</td>
                                    <td>Indonesia</td>
                                    <td>Narcao</td>
                                    <td>722-8264</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Default Dark Table -->
    </div>

@endsection
