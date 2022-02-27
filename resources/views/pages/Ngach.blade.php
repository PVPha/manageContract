@extends('layouts.main')
@section('content')
    <!-- / .main-navbar -->
    <div class="main-content-container container-fluid px-4">
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Tổng quát</span>
                <h3 class="page-title">Ngạch công chức</h3>
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
                        <table class="table mb-0 table-ngach">
                            <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">ID ngạch </th>
                                    <th scope="col" class="border-0">Mã số ngạch</th>
                                    <th scope="col" class="border-0">Nhóm</th>
                                    <th scope="col" class="border-0">Tên ngạch</th>
                                    <th scope="col" class="border-0">Số năm nâng bậc</th>
                                    <th scope="col" class="border-0">Từ viết tắt</th>
                                    <th scope="col" class="border-0">Thứ tự ưu tiên</th>
                                    <th scope="col" class="border-0">Hành động</th>
                                </tr>
                                <tr class="add add-hidden">
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $key => $item)
                                    <tr class="bdy" onclick="xemBac('{{ $item->ID_NGACH }}')">
                                        <td>{{ $key + 1 }}
                                        </td>
                                        <form action="{{ url('ngach/update') }}" name="fUpdate" method="POST">
                                            @method('put')
                                            @csrf
                                            <td>
                                                <input type="text" class="inline-update none-update" name="ID_N"
                                                    value="{{ $item->ID_NGACH }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="MA_N"
                                                    value="{{ $item->MA_SO_NGACH }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="NHOM"
                                                    value="{{ $item->NHOM }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="TEN_N"
                                                    value="{{ $item->TEN_NGACH }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="SO_NAM_NB"
                                                    value="{{ $item->SO_NAM_NANG_BAC }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="TU_VT"
                                                    value="{{ $item->TU_VIET_TAT }}" style="width: 7rem" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="inline-update" name="TT_UU_TIEN"
                                                    value="{{ $item->THU_TU_UU_TIEN }}" style="width: 7rem" readonly>
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
                                                        onclick="update({{ $key + 1 }})">Cập
                                                        nhật</button>
                                                    <button class="dropdown-item "><a
                                                            href="{{ url('ngach/destroy') . '/' . $item->ID_NGACH }}"
                                                            style="display: inline-block;width: 100%;color:black;">Xóa</a>
                                                    </button>
                                                    <button class="dropdown-item disabled" href="#">Disabled
                                                        action</button>
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


        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <h3 class="page-title">Bậc lương</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        {{-- <h6 class="m-0" style="display: inline-block">Active Users</h6> --}}
                        <button class="btn btn-primary btn-add" onclick="add2()">Thêm</button>
                        <div style="display: inline-block; position: relative;float: right;">
                            <i class="material-icons"
                                style="font-size: 1.2rem;position: absolute;top: 0.3rem;right: 0.3rem;background: white;">search</i>
                            <input type="text" name="" id="searchInp">
                        </div>
                    </div>
                    <div class="card-body p-0 pb-3 text-center">
                        <table class="table mb-0 table-bac">
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
                                                @foreach ($data as $item)
                                                    <option value="{{ $item->ID_NGACH }}">
                                                        {{ $item->TEN_NGACH . '(' . $item->MA_SO_NGACH . ')' }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </td>
                                        <td><input type="text" name="ID_NHOM" style="width: 9rem"></td>
                                        <td>
                                            <button class="btn btn-success" onclick="add3(event)">Thêm</button>
                                        </td>
                                    </form>
                                </tr>
                            </thead>
                            <tbody id="bdy-here">
                                @csrf
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="button" id="btn-alert" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter"
        style="display: none">
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <h4 style="text-align: center;padding: 1rem;margin: 0.5rem 0;">Thêm thành công</h4>
            </div>
        </div>
    </div>

    <script>
        function xemBac(ngach) {
            $.ajax({
                url: 'bacluong/' + ngach,
                type: 'GET',
            }).done(function(result) {
                let data = JSON.parse(result);
                let bacluong = data.data;
                let body = "";
                let stt = 1;
                bacluong.forEach(ele => {
                    body += "<tr class='bdy'> <td> " + stt +
                        " </td> <form action='bacluong/update' name='fUpdate' method='POST'>   <input type='hidden' name='_method' value='PUT'>  <input type='hidden'  name='_token' value='{{ csrf_token() }}' >  <td> <input type='text' class='inline-update none-update' name='BAC' value=' " +
                        ele.BAC +
                        " ' style='width: 8.5rem' readonly> </td> <td> <input type='text' class='inline-update' name='HS_LUONG'  value='" +
                        ele.HE_SO_LUONG +
                        "' style='width: 8.5rem' readonly> </td> <td> <input type='date' class='inline-update' name='NGAY_BD' value='" +
                        ele.NGAY_BAT_DAU_HIEU_LUC +
                        "' style='width: 8.5rem' readonly> </td> <td> <input type='date' class='inline-update' name='NGAY_KT' value='" +
                        ele.NGAY_HET_HIEU_LUC +
                        "' style='width: 8.5rem' readonly> </td> <td> <select class='ID_N' name='ID_NGACH' id=' ' style='width: 8.5rem; padding-bottom: 0.15rem; text-align: center; line-height: 100% ; padding-top: 0.15rem; '> <option value='1'>mot</option> <option value='2'>hai</option> </select> <input type='text' class='id_n_tmp' value='" +
                        ele.FK_ID_NGACH +
                        "' style='width: 8.5rem; text-align: center; border: none;' readonly> </td> <td> <input type='text' class='inline-update' name='ID_NHOM' value='" +
                        ele.FK_ID_NHOM +
                        "' style='width: 8.5rem' readonly> </td> </form> <td> <div class='update-btn'> <button class='btn btn-success' onclick='btnUpdate2(" +
                        stt +
                        ")'>Cập nhật</button> <button class='btn btn-danger' onclick='btnCancleUpdate2(" +
                        stt + "); cancleUpdate2(" + stt +
                        ")'>Hủy</button> </div> <div class='dropdown open'> <button class='btn dropdown-toggle btn-action' type='button' id='triggerId' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> <i class='material-icons' style='font-size: 1.2rem; transform: translate(50% , -50% ); color: black;'>clear_all</i> </button> <div class='dropdown-menu ' aria-labelledby='triggerId' style='left: -2rem'> <button class='dropdown-item' href='#' onclick=' update1(" +
                        stt + "); update2(" + stt +
                        ") '>Cập nhật</button> <button class='dropdown-item'><a href='{{ url('bacluong/destroy') . '/' }}" +
                        ele.BAC +
                        " ' style='display: inline-block; width: 100% ; color: black; '>Xóa</a> </button> <button class='dropdown-item disabled' href='#'>Disabled action</button> </div> </div> </td> </tr>";
                    stt++;
                })
                document.getElementById('bdy-here').innerHTML = body;
            })
        }

        function add2() {
            document.querySelector('.table-bac .add').classList.toggle("add-hidden")
        }

        function add3(e) {
            e.preventDefault();
            let data = document.querySelectorAll('.table-bac .add input');
            $.ajax({
                url: '/bacluong',
                type: 'POST',
                dataType: 'html',
                data: {
                    _token: data[0].value,
                    BAC: data[1].value,
                    HS_LUONG: data[2].value,
                    NGAY_BD: data[3].value,
                    NGAY_KT: data[4].value,
                    ID_NGACH: document.querySelectorAll('.table-bac .add select')[0].value,
                    ID_NHOM: data[5].value
                }
            }).done(function(ketqua) {
                document.querySelector('.table-bac .add').classList.add("add-hidden");
                document.getElementById('btn-alert').click()
            });
        }

        function update1(event) {
            // let td = document.querySelectorAll('.bdy:nth-child(' + event + ') td');
            let td = document.querySelectorAll('.table-bac .bdy:nth-child(' + event + ') .inline-update');
            td.forEach(e => {
                e.style.border = '1px solid black';
                e.removeAttribute('readOnly');
            });
            document.querySelector('.table-bac .bdy:nth-child(' + event + ') .none-update').setAttribute('readOnly', 'true')
            document.querySelector('.table-bac .bdy:nth-child(' + event + ') .update-btn').style.display = 'inline';
            document.querySelector('.table-bac .bdy:nth-child(' + event + ') .dropdown').style.display = 'none';
        }

        function update2(index) {
            console.log(index);
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .id_n_tmp').style.display = 'none';
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .ID_N').style.display = 'block';

            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .ID_N').innerHTML = document.querySelector(
                '.table-bac .add select').innerHTML;
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .ID_N').value = document.querySelector(
                '.bdy:nth-child(' +
                index + ') .id_n_tmp').value;

            // document.querySelector('.table-bac .bdy:nth-child(' + index + ') #token').value = document.querySelector(
            //     '.table-bac .add form')['_token'].value;
        }

        function btnCancleUpdate2(index) {
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .update-btn').style.display = 'none';
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .dropdown').style.display = 'inline';
            let td = document.querySelectorAll('.table-bac .bdy:nth-child(' + index + ') .inline-update');
            td.forEach(e => {
                e.value = e.defaultValue;
                e.style.border = 'none';
                e.setAttribute('readOnly', 'true')
            });
        }

        function btnUpdate2(index) {
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .update-btn').style.display = 'none';
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .dropdown').style.display = 'inline';
            let td = document.querySelectorAll('.table-bac .bdy:nth-child(' + index + ') .inline-update');
            td.forEach(e => {
                // e.value = e.defaultValue;
                console.log(e.value);
                e.style.border = 'none';
                e.setAttribute('readOnly', 'true')
            });

            // document.querySelector('.table-bac .bdy:nth-child(' + index + ') form').submit();
            let method = '';
            let token = '';
            let BAC = '';
            let HS_LUONG = '';
            let NGAY_BD = '';
            let NGAY_KT = '';
            let ID_NGACH = '';
            let ID_NHOM = '';
            let data = document.querySelectorAll('.table-bac .bdy:nth-child(' + index + ') input');
            data[6].value = document.querySelectorAll('.table-bac .bdy:nth-child(' + index + ') select')[0].value
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .id_n_tmp').style.display = 'block';
            document.querySelector('.table-bac .bdy:nth-child(' + index + ') .ID_N').style.display = 'none';
            $.ajax({
                url: 'bacluong/update',
                type: 'POST',
                dataType: 'html',
                data: {
                    _method: data[0].value,
                    _token: data[1].value,
                    BAC: data[2].value,
                    HS_LUONG: data[3].value,
                    NGAY_BD: data[4].value,
                    NGAY_KT: data[5].value,
                    ID_NGACH: document.querySelectorAll('.table-bac .bdy:nth-child(' + index + ') select')[0].value,
                    ID_NHOM: data[7].value
                }
            }).done(function(ketqua) {
                console.log(ketqua);
            });
        }

        function cancleUpdate2(index) {
            document.querySelector('.bdy:nth-child(' + index + ') .ID_N').style.display = 'none';
            document.querySelector('.bdy:nth-child(' + index + ') .id_n_tmp').style.display = 'block';
        }
    </script>

@endsection
