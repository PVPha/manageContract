@extends('layouts.main')
@section('content')
    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Tổng quát</span>
                <h3 class="page-title">Bậc lương</h3>
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
                                    <th scope="col" class="border-0">Bậc</th>
                                    <th scope="col" class="border-0">Hệ số lương</th>
                                    <th scope="col" class="border-0">Ngày bắt đầu</th>
                                    <th scope="col" class="border-0">Ngày hết </th>
                                    <th scope="col" class="border-0">Ngạch</th>
                                    <th scope="col" class="border-0">Nhóm</th>
                                    <th scope="col" class="border-0">Hành động</th>
                                </tr>
                                <tr class="add add-hidden">
                                    <form action="{{ url('bacluong') }}" method="POST">
                                        @csrf
                                        <td>Thêm</td>
                                        <td><input type="text" name="BAC" style="width: 9rem"></td>
                                        <td><input type="text" name="HS_LUONG" style="width: 9rem"></td>
                                        <td><input type="date" name="NGAY_BD" style="width: 9rem"></td>
                                        <td><input type="date" name="NGAY_KT" style="width: 9rem"></td>
                                        {{-- <input type="text" name="ID_NGACH" style="width: 9rem"> --}}
                                        <td>
                                            <select name="ID_NGACH" id="" readonly
                                                style="width: 9rem;padding-bottom: 0.15rem;text-align: center;line-height: 100%;padding-top: 0.15rem;">
                                                <option value=""></option>
                                                @foreach ($quantum as $item)
                                                    <option value="{{ $item->ID_NGACH }}">{{ $item->TEN_NGACH }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </td>
                                        <td><input type="text" name="ID_NHOM" style="width: 9rem"></td>
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
                                        <form action="{{ 'bacluong/' . $item->BAC }}" name="fUpdate" method="POST">
                                            @method('put')
                                            @csrf
                                            <td>
                                                <input type="text" class="inline-update none-update" name="BAC"
                                                    value="{{ $item->BAC }}" style="width: 8.5rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="HS_LUONG"
                                                    value="{{ $item->HE_SO_LUONG }}" style="width: 8.5rem" readonly>
                                            </td>
                                            <td>
                                                <input type="date" class="inline-update" name="NGAY_BD"
                                                    value="{{ $item->NGAY_BAT_DAU_HIEU_LUC }}" style="width: 8.5rem"
                                                    readonly>
                                            </td>
                                            <td>
                                                <input type="date" class="inline-update" name="NGAY_KT"
                                                    value="{{ $item->NGAY_HET_HIEU_LUC }}" style="width: 8.5rem" readonly>
                                            </td>
                                            <td>
                                                <select class="ID_N" name="ID_NGACH" id=""
                                                    style="width: 8.5rem;padding-bottom: 0.15rem;text-align: center;line-height: 100%;padding-top: 0.15rem;">
                                                    <option value="1">mot</option>
                                                    <option value="2">hai</option>
                                                </select>
                                                <input type="text" class="id_n_tmp" value="{{ $item->FK_ID_NGACH }}"
                                                    style="width: 8.5rem;text-align: center;border: none;" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="ID_NHOM"
                                                    value="{{ $item->FK_ID_NHOM }}" style="width: 8.5rem" readonly>
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
                                                            href="{{ url('bacluong/destroy') . '/' . $item->BAC }}"
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
    </div>
    <script>
        function update2(index) {
            console.log(index);
            document.querySelector('.bdy:nth-child(' + index + ') .id_n_tmp').style.display = 'none';
            document.querySelector('.bdy:nth-child(' + index + ') .ID_N').style.display = 'block';
            document.querySelector('.bdy:nth-child(' + index + ') .ID_N').value = document.querySelector('.bdy:nth-child(' +
                index + ') .id_n_tmp').value;
        }

        function cancleUpdate2(index) {
            document.querySelector('.bdy:nth-child(' + index + ') .ID_N').style.display = 'none';
            document.querySelector('.bdy:nth-child(' + index + ') .id_n_tmp').style.display = 'block';
        }
    </script>
@endsection
