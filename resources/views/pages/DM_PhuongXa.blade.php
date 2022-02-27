@extends('layouts.main')
@section('content')
    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Tổng quát</span>
                <h3 class="page-title">Phường xã</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        {{-- <h6 class="m-0" style="display: inline-block">Active Users</h6> --}}
                        <button class="btn btn-primary btn-add" onclick="add()">Thêm</button>
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
                                    <th scope="col" class="border-0">Mã phường-xã</th>
                                    <th scope="col" class="border-0">Tên phường-xã</th>
                                    <th scope="col" class="border-0">Từ viết tắt</th>
                                    <th scope="col" class="border-0">Mã quận-huyện</th>
                                    <th scope="col" class="border-0">Hành động</th>
                                </tr>
                                <tr class="add add-hidden">
                                    <form action="{{ url('phuongxa') }}" method="POST">
                                        @csrf
                                        <td>Thêm</td>
                                        <td><input type="text" name="MA_PX"></td>
                                        <td><input type="text" name="TEN_PX"></td>
                                        <td><input type="text" name="TU_VT"></td>
                                        <td><select name="MA_QH" id="" readonly
                                                style="width: 9rem;padding-bottom: 0.15rem;text-align: center;line-height: 100%;padding-top: 0.15rem;">
                                                <option value=""></option>
                                                @foreach ($qh as $item)
                                                    <option value="{{ $item->MA_QUAN_HUYEN }}">
                                                        {{ $item->TEN_QUAN_HUYEN }}
                                                    </option>
                                                @endforeach

                                            </select></td>
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
                                        <form action="{{ url('phuongxa/update') }}" name="fUpdate" method="POST">
                                            @method('put')
                                            @csrf
                                            <td>
                                                <input type="text" class="inline-update none-update" name="MA_PX"
                                                    value="{{ $item->MA_PHUONG_XA }}" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="TEN_PX"
                                                    value="{{ $item->TEN_PHUONG_XA }}" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="TU_VT"
                                                    value="{{ $item->TU_VIET_TAT }}" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update ma_QH_tmp" name=""
                                                    value="{{ $item->FK_MA_QUAN_HUYEN }}" readonly>
                                                <select name="MA_QH" id="MA_QH" readonly
                                                    style="width: 9rem;padding-bottom: 0.15rem;text-align: center;line-height: 100%;padding-top: 0.15rem;display: none">
                                                    <option value=""></option>
                                                    @foreach ($qh as $item2)
                                                        <option value="{{ $item2->MA_QUAN_HUYEN }}">
                                                            {{ $item2->TEN_QUAN_HUYEN }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </form>
                                        <td>
                                            <div class="update-btn">
                                                <button class="btn btn-success"
                                                    onclick="btnUpdate({{ $key + 1 }})">Cập
                                                    nhật</button>
                                                <button class="btn btn-danger"
                                                    onclick="btnCancleUpdate({{ $key + 1 }});cancleUpdate2({{ $key + 1 }})">Hủy</button>
                                            </div>
                                            <div class="dropdown open">
                                                <button class="btn dropdown-toggle btn-action" type="button" id="triggerId"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons"
                                                        style="font-size: 1.2rem;transform: translate(50%, -50%);color: black;">clear_all</i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="triggerId" style="left:-2rem">
                                                    <button class="dropdown-item " href="#"
                                                        onclick="update({{ $key + 1 }});update2({{ $key + 1 }})">Cập
                                                        nhật</button>
                                                    <button class="dropdown-item "><a
                                                            href="{{ url('phuongxa/destroy') . '/' . $item->MA_PHUONG_XA }}"
                                                            style="display: inline-block;width: 100%;color:black;">Xóa</a>
                                                    </button>
                                                    {{-- <button class="dropdown-item disabled" href="#">Disabled
                                                        action</button> --}}
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
    </div>
    <script>
        function update2(index) {
            console.log(index);
            document.querySelector('.bdy:nth-child(' + index + ') .ma_QH_tmp').style.display = 'none';
            document.querySelector('.bdy:nth-child(' + index + ') #MA_QH').style.display = 'block';
            document.querySelector('.bdy:nth-child(' + index + ') #MA_QH').value = document.querySelector(
                '.bdy:nth-child(' +
                index + ') .ma_QH_tmp').value;
        }

        function cancleUpdate2(index) {
            document.querySelector('.bdy:nth-child(' + index + ') #MA_QH').style.display = 'none';
            document.querySelector('.bdy:nth-child(' + index + ') .ma_QH_tmp').style.display = 'block';
        }
    </script>
@endsection
