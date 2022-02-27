<!doctype html>
<html class="no-js h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
    <meta name="description"
        content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0"
        href=" {{ url('styles/shards-dashboards.1.1.0.min.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ url('styles/extras.1.1.0.min.css') }}">
    <link rel="stylesheet" href="{{ url('styles/myStyle.css') }}">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.tiny.cloud/1/g070n42f1h0won3aaevgw9ufk4jtqb0f1tixpqvg5ibpk9p1/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <style>
        .child-menu {
            list-style: none;
            display: none;
            padding-left: 0;
            /* margin: 0.2rem 0 0.2rem 1rem; */
        }

        /*
        .child-menu li {
            text-align: center;
        } */

        .child-menu-show {
            display: block !important;
        }

    </style>
</head>

<body class="h-100">
    {{-- <div class="color-switcher animated">
        <h5>Accent Color</h5>
        <ul class="accent-colors">
            <li class="accent-primary active" data-color="primary">
                <i class="material-icons">check</i>
            </li>
            <li class="accent-secondary" data-color="secondary">
                <i class="material-icons">check</i>
            </li>
            <li class="accent-success" data-color="success">
                <i class="material-icons">check</i>
            </li>
            <li class="accent-info" data-color="info">
                <i class="material-icons">check</i>
            </li>
            <li class="accent-warning" data-color="warning">
                <i class="material-icons">check</i>
            </li>
            <li class="accent-danger" data-color="danger">
                <i class="material-icons">check</i>
            </li>
        </ul>
        <div class="actions mb-4">
            <a class="mb-2 btn btn-sm btn-primary w-100 d-table mx-auto extra-action"
                href="https://designrevision.com/downloads/shards-dashboard-lite/">
                <i class="material-icons">cloud</i> Download</a>
            <a class="mb-2 btn btn-sm btn-white w-100 d-table mx-auto extra-action"
                href="https://designrevision.com/docs/shards-dashboard-lite">
                <i class="material-icons">book</i> Documentation</a>
        </div>
        <div class="social-wrapper">
            <div class="social-actions">
                <h5 class="my-2">Help us Grow</h5>
                <div class="inner-wrapper">
                    <a class="github-button" href="https://github.com/DesignRevision/shards-dashboard"
                        data-icon="octicon-star" data-show-count="true"
                        aria-label="Star DesignRevision/shards-dashboard on GitHub">Star</a>
                    <!-- <iframe style="width: 91px; height: 21px;"src="https://yvoschaap.com/producthunt/counter.html#href=https%3A%2F%2Fwww.producthunt.com%2Fr%2Fp%2F112998&layout=wide" width="56" height="65" scrolling="no" frameborder="0" allowtransparency="true"></iframe> -->
                </div>
            </div>
            <div id="social-share" data-url="https://designrevision.com/downloads/shards-dashboard-lite/"
                data-text="🔥 Check out Shards Dashboard Lite, a free and beautiful Bootstrap 4 admin dashboard template!"
                data-title="share"></div>
            <div class="loading-overlay">
                <div class="spinner"></div>
            </div>
        </div>
        <div class="close">
            <i class="material-icons">close</i>
        </div>
    </div> --}}
    {{-- <div class="color-switcher-toggle animated pulse infinite">
        <i class="material-icons">settings</i>
    </div> --}}
    <div class="container-fluid">
        <div class="row">
            <!-- Main Sidebar -->
            <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
                <div class="main-navbar">
                    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
                        <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                            <div class="d-table m-auto">
                                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;"
                                    src=" {{ url('images/shards-dashboards-logo.svg') }}" alt="Shards Dashboard">
                                <span class="d-none d-md-inline ml-1">Quản lý nhân sự</span>
                            </div>
                        </a>
                        <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                            <i class="material-icons">&#xE5C4;</i>
                        </a>
                    </nav>
                </div>
                <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
                    <div class="input-group input-group-seamless ml-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                        <input class="navbar-search form-control" type="text" placeholder="Search for something..."
                            aria-label="Search">
                    </div>
                </form>
                <div class="nav-wrapper">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="/">
                                <i class="material-icons">edit</i>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link parent-menu" onclick="showChild(0)">
                                <i class="material-icons">view_module</i>
                                <span>Thông tin danh mục</span>
                            </a>
                        </li>
                        <span class="child-menu">
                            <li class="nav-item ">
                                <a class="nav-link " href="/chungchiBD">
                                    <i class="material-icons"></i>
                                    <span>Chứng chỉ</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/chiphiCT">
                                    <i class="material-icons"></i>
                                    <span>Chi phí công tác</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/danhhieu">
                                    <i class="material-icons"></i>
                                    <span>Danh hiệu</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/hesophucap">
                                    <i class="material-icons"></i>
                                    <span>Hệ số phụ cấp</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/hinhthucBD">
                                    <i class="material-icons"></i>
                                    <span>Hình thức BD</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/khenthuong">
                                    <i class="material-icons"></i>
                                    <span>Khen thưởng</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/kyluat">
                                    <i class="material-icons"></i>
                                    <span>Kỷ luật</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/loaiHD">
                                    <i class="material-icons"></i>
                                    <span>Loại hợp đồng</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/luongCB">
                                    <i class="material-icons"></i>
                                    <span>Lương cơ bản</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/mucdichCT">
                                    <i class="material-icons"></i>
                                    <span>Mục đích công tác</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/quanhe">
                                    <i class="material-icons"></i>
                                    <span>Quan hệ</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/phuongxa">
                                    <i class="material-icons"></i>
                                    <span>Phường-xã</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/quanhuyen">
                                    <i class="material-icons"></i>
                                    <span>Quận-huyện</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/tinhTP">
                                    <i class="material-icons"></i>
                                    <span>Tỉnh thành phố</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/trinhdoTH">
                                    <i class="material-icons"></i>
                                    <span>Trình độ tin học</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/xuatthan">
                                    <i class="material-icons"></i>
                                    <span>Xuất thân</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/trinhdoLLCT">
                                    <i class="material-icons"></i>
                                    <span>Trình độ LLCT</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/trinhdoQLGD">
                                    <i class="material-icons"></i>
                                    <span>Trình độ QLGD</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/DMTrinhDoQLNN">
                                    <i class="material-icons"></i>
                                    <span>Trình độ QLNN</span>
                                </a>
                            </li>
                        </span>
                        <li class="nav-item">
                            <a class="nav-link " onclick="showChild(1)">
                                <i class="material-icons">table_chart</i>
                                <span>Ngạch-bậc lương</span>
                            </a>
                        </li>
                        <span class="child-menu">
                            <li class="nav-item ">
                                <a class="nav-link " href="/bacluong">
                                    <i class="material-icons"></i>
                                    <span>Bậc lương</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="/ngach">
                                    <i class="material-icons"></i>
                                    <span>Ngạch</span>
                                </a>
                            </li>
                        </span>
                        <li class="nav-item">
                            <a class="nav-link " href="/tuyendung">
                                <i class="material-icons">assignment_ind</i>
                                <span>Tuyển dụng</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/canbo">
                                <i class="material-icons">assignment_ind</i>
                                <span>Quản lý cán bộ GD</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/quanlyHDLD">
                                <i class="material-icons">assignment</i>
                                <span>Quản lý HĐLĐ</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link " href="#">
                                <i class="material-icons">person</i>
                                <span>User Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">
                                <i class="material-icons">error</i>
                                <span>Errors</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </aside>
            <!-- End Main Sidebar -->
            <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
                <div class="main-navbar sticky-top bg-white">
                    <!-- Main Navbar -->
                    <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
                        <form action="#" class="main-navbar__search w-100 d-none d-md-flex d-lg-flex">
                            {{-- <div class="input-group input-group-seamless ml-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-search"></i>
                                    </div>
                                </div>
                                <input class="navbar-search form-control" type="text"
                                    placeholder="Search for something..." aria-label="Search">
                            </div> --}}
                        </form>
                        <ul class="navbar-nav border-left flex-row ">
                            {{-- <li class="nav-item border-right dropdown notifications">
                                <a class="nav-link nav-link-icon text-center" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="nav-link-icon__wrapper">
                                        <i class="material-icons">&#xE7F4;</i>
                                        <span class="badge badge-pill badge-danger">2</span>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-small" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">
                                        <div class="notification__icon-wrapper">
                                            <div class="notification__icon">
                                                <i class="material-icons">&#xE6E1;</i>
                                            </div>
                                        </div>
                                        <div class="notification__content">
                                            <span class="notification__category">Analytics</span>
                                            <p>Your website’s active users count increased by
                                                <span class="text-success text-semibold">28%</span> in the last week.
                                                Great job!
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <div class="notification__icon-wrapper">
                                            <div class="notification__icon">
                                                <i class="material-icons">&#xE8D1;</i>
                                            </div>
                                        </div>
                                        <div class="notification__content">
                                            <span class="notification__category">Sales</span>
                                            <p>Last week your store’s sales count decreased by
                                                <span class="text-danger text-semibold">5.52%</span>. It could have
                                                been worse!
                                            </p>
                                        </div>
                                    </a>
                                    <a class="dropdown-item notification__all text-center" href="#"> View all
                                        Notifications </a>
                                </div>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <img class="user-avatar rounded-circle mr-2"
                                        src="{{ url('images/avatars/no-ava.jpg') }}" alt="User Avatar">
                                    {{-- images/avatars/0.jpg --}}
                                    <span class="d-none d-md-inline-block">{{ auth()->user()->name }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-small">
                                    <a class="dropdown-item" href="#">
                                        <i class="material-icons">&#xE7FD;</i> Profile</a>
                                    <a class="dropdown-item" href="#">
                                        <i class="material-icons">vertical_split</i> Blog Posts</a>
                                    <a class="dropdown-item" href="#">
                                        <i class="material-icons">note_add</i> Add New Post</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <i class="material-icons text-danger">&#xE879;</i>
                                        {{ __('Logout') }}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <nav class="nav">
                            <a href="#"
                                class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left"
                                data-toggle="collapse" data-target=".header-navbar" aria-expanded="false"
                                aria-controls="header-navbar">
                                <i class="material-icons">&#xE5D2;</i>
                            </a>
                        </nav>
                    </nav>
                </div>
                @yield('content')
                {{-- <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                    <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
                        <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
                    </span>
                </footer> --}}
            </main>
        </div>
    </div>
    {{-- <div class="promo-popup animated">
        <a href="http://bit.ly/shards-dashboard-pro" class="pp-cta extra-action">
            <img src="https://dgc2qnsehk7ta.cloudfront.net/uploads/sd-blog-promo-2.jpg"> </a>
        <div class="pp-intro-bar"> Need More Templates?
            <span class="close">
                <i class="material-icons">close</i>
            </span>
            <span class="up">
                <i class="material-icons">keyboard_arrow_up</i>
            </span>
        </div>
        <div class="pp-inner-content">
            <h2>Shards Dashboard Pro</h2>
            <p>A premium & modern Bootstrap 4 admin dashboard template pack.</p>
            <a class="pp-cta extra-action" href="http://bit.ly/shards-dashboard-pro">Download</a>
        </div>
    </div> --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src=" {{ url('scripts/extras.1.1.0.min.js') }}"></script>
    <script src="{{ url('scripts/shards-dashboards.1.1.0.min.js') }} "></script>
    <script src="{{ url('scripts/app/app-blog-overview.1.1.0.js') }}"></script>
    <script>
        function showChild(param) {
            document.querySelectorAll('.child-menu').item(param).classList.toggle("child-menu-show");
        }

        function add() {
            document.querySelector('.add').classList.toggle("add-hidden")
        }

        function update(event) {
            // let td = document.querySelectorAll('.bdy:nth-child(' + event + ') td');
            let td = document.querySelectorAll('.bdy:nth-child(' + event + ') .inline-update');
            td.forEach(e => {
                e.style.border = '1px solid black';
                e.removeAttribute('readOnly');
            });
            document.querySelector('.bdy:nth-child(' + event + ') .none-update').setAttribute('readOnly', 'true')
            document.querySelector('.bdy:nth-child(' + event + ') .update-btn').style.display = 'inline';
            document.querySelector('.bdy:nth-child(' + event + ') .dropdown').style.display = 'none';
        }

        function btnCancleUpdate(index) {
            document.querySelector('.bdy:nth-child(' + index + ') .update-btn').style.display = 'none';
            document.querySelector('.bdy:nth-child(' + index + ') .dropdown').style.display = 'inline';
            let td = document.querySelectorAll('.bdy:nth-child(' + index + ') .inline-update');
            td.forEach(e => {
                e.value = e.defaultValue;
                e.style.border = 'none';
                e.setAttribute('readOnly', 'true')
            });
        }

        function btnUpdate(index) {
            document.querySelector('.bdy:nth-child(' + index + ') .update-btn').style.display = 'none';
            document.querySelector('.bdy:nth-child(' + index + ') .dropdown').style.display = 'inline';
            let td = document.querySelectorAll('.bdy:nth-child(' + index + ') .inline-update');
            td.forEach(e => {
                // e.value = e.defaultValue;
                console.log(e.value);
                e.style.border = 'none';
                e.setAttribute('readOnly', 'true')
            });
            document.querySelector('.bdy:nth-child(' + index + ') form').submit();
        }
        var $rows = $('.table .bdy');
        console.log($rows);
        $('#searchInp').keyup(function() {
            var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
                reg = RegExp(val, 'i'),
                text;
            $rows.show().filter(function() {
                text = $(this).text().replace(/\s+/g, ' ');
                return !reg.test(text);
            }).hide();
        });

        var print = []

        function updateContract(index) {
            $.ajax({
                url: 'quanlyHDLD/' + index,
                type: 'GET',
            }).done(function(result) {
                console.log(result);
                print = result;
                document.querySelector('.btn-add').click();
                document.querySelector('.btn-print').style.display = 'inline-block';
                document.querySelector('.modal-title').innerText = 'Cập nhật hợp đồng'
                document.querySelector('.modal-footer .btn-submit').innerText = 'Cập nhật'
                document.forms['addContract'].setAttribute('action', document.forms['addContract'].getAttribute(
                    'action') + '/' + result[0].MA_SO_HDONG_LDONG)
                document.forms['addContract']['_method'].value = 'put'
                document.forms['addContract']['MA_HDLD'].value = result[0].MA_SO_HDONG_LDONG;
                document.forms['addContract']['BEN_A'].value = result[0].BEN_A;
                document.forms['addContract']['BEN_A_QT'].value = result[0].BEN_A_QUOC_TICH;
                document.forms['addContract']['BEN_A_CV'].value = result[0].BEN_A_CHUC_VU;
                console.log('chuc vusdfdf' + document.forms['addContract']['BEN_A_CV'].value);
                document.forms['addContract']['BEN_A_DT'].value = result[0].BEN_A_DIEN_THOAI;
                document.forms['addContract']['BEN_A_DD'].value = result[0].BEN_A_DAI_DIEN_CHO;
                // document.forms['addContract']['BEN_A_DC'].value = result[0].BEN_A_DIA_CHI;
                document.forms['addContract']['BEN_B'].value = result[0].BEN_B;
                document.forms['addContract']['MA_CB'].value = result[0].MA_CAN_BO;
                document.forms['addContract']['NN'].value = result[0].NGHE_NGHIEP;
                document.forms['addContract']['LOAI_HD'].value = result[0].FK_MA_LOAI_HDONG;
                document.forms['addContract']['HD_TU'].value = result[0].HD_TU_NGAY;
                document.forms['addContract']['HD_DEN'].value = result[0].HD_DEN_NGAY;
                document.forms['addContract']['BO_MON'].value = result[0].HD_FK_MA_BO_MON;
                document.forms['addContract']['CDANH_CM'].value = result[0].CHUC_DANH_CHUYEN_MON;
                document.forms['addContract']['BEN_A_CV'].value = result[0].FK_MA_CHUC_VU;
                document.forms['addContract']['CVIEC_PL'].value = result[0].CV_PHAI_LAM;
                document.forms['addContract']['TG_LVIEC'].value = result[0].THOI_GIAN_LAM_VIEC;
                document.forms['addContract']['CPHAT'].value = result[0].DCU_LAM_VIEC_CAP_PHAT;
                document.forms['addContract']['PTIEN_DL'].value = result[0].PHUONG_TIEN_DI_LAI;
                document.forms['addContract']['NGACH'].value = result[0].NGACH;
                document.forms['addContract']['BAC_L'].value = result[0].BAC;
                document.forms['addContract']['HSO_L'].value = result[0].HE_SO_LUONG;
                document.forms['addContract']['HTHUC_TL'].value = result[0].HINH_THUC_TRA_LUONG;
                document.forms['addContract']['PCAP'].value = result[0].PHU_CAP_GOM;
                document.forms['addContract']['TG_TLUONG'].value = result[0].THOI_GIAN_TRA_LUONG;
                document.forms['addContract']['TIEN_T'].value = result[0].TIEN_THUONG;
                document.forms['addContract']['CDO_NL'].value = result[0].CHE_DO_NANG_LUONG;
                document.forms['addContract']['BHO_LD'].value = result[0].BAO_HO_LDONG;
                document.forms['addContract']['CDO_NN'].value = result[0].CHE_DO_NGHI_NGOI;
                document.forms['addContract']['BHIEM'].value = result[0].BHXH_BHYT;
                document.forms['addContract']['CDO_DT'].value = result[0].CHE_DO_DAO_TAO;
                document.forms['addContract']['QLOI_DH'].value = result[0].QUYEN_LOI_DUOC_HUONG;
                document.forms['addContract']['TTHUAN_K'].value = result[0].NHUNG_THOA_THUAN_KHAC;
                document.forms['addContract']['BTHUONG'].value = result[0].BOI_THUONG;
                document.forms['addContract']['HD_LTAI'].value = result[0].HDLD_LAM_TAI;
                document.forms['addContract']['GCHU'].value = result[0].GHI_CHU;
                document.forms['addContract']['NKY'].value = result[0].NGAY_KY;
                document.forms['addContract']['TV_TU'].value = result[0].THU_VIEC_TU_NGAY;
                document.forms['addContract']['TV_DEN'].value = result[0].THU_VIEC_DEN_NGAY;
                document.forms['addContract']['MA_HDLD'].value = result[0].SO_HOP_DONG;
                document.forms['addContract']['NOI_DK_BH'].value = result[0].NOI_DANG_KY_BHYT;
                document.forms['addContract']['HSO_L'].value = result[0].HE_SO_LUONG_IN;
                document.forms['addContract']['LOAI_HD'].value = result[0].LOAI_HOP_DONG;
                document.forms['addContract']['NGACH'].value = result[0].FK_ID_NGACH;
                document.forms['addContract']['DIACHI'].value = result[0].HO_KHAU_THUONG_TRU;
                // document.querySelector('#contractContent').innerHTML = document.querySelector('#contractEditor')
                //     .value
                // console.log(document.querySelector('#contractContent #BEN_ACT'));
                document.querySelector('#contractContent #bena').innerText = print[0].BEN_A;
                document.querySelector('#contractContent #daidien').innerText = print[0].BEN_A_DAI_DIEN_CHO;
                document.querySelector('#contractContent #chucvu').innerText = print[0].BEN_A_CHUC_VU;
                document.querySelector('#contractContent #quoctich').innerText = print[0].BEN_A_QUOC_TICH;
                document.querySelector('#contractContent #diachi').innerText = print[0].BEN_A_DIA_CHI;
                document.querySelector('#contractContent #dienthoai').innerText = print[0].BEN_A_DIEN_THOAI;
                document.querySelector('#contractContent #benb').innerText = print[0].BEN_B;
                // document.querySelector('#contractContent #trinhdo').innerText = print[0].TRIN;
                // document.querySelector('#contractContent #chuyennganh').innerText = print[0].;
                document.querySelector('#contractContent #loaihopdong').innerText = print[0].LOAI_HOP_DONG;
                // document.querySelector('#contractContent #thoihan').innerText = print[0].;
                document.querySelector('#contractContent #batdau').innerText = print[0].HD_TU_NGAY;
                document.querySelector('#contractContent #ketthuc').innerText = print[0].HD_DEN_NGAY;
                document.querySelector('#contractContent #hopdonglamtai').innerText = print[0].HDLD_LAM_TAI;
                // document.querySelector('#contractContent #bophan').innerText = print[0].BO_MON;
                document.querySelector('#contractContent #chucdanhchuyenmon').innerText = print[0]
                    .CHUC_DANH_CHUYEN_MON;
                document.querySelector('#contractContent #nhiemvucongviec').innerText = print[0].CV_PHAI_LAM;
                document.querySelector('#contractContent #thoigianlamviec').innerText = print[0].THOI_GIAN_LAM_VIEC;
                document.querySelector('#contractContent #hesoluong').innerText = print[0].HE_SO_LUONG;
                document.querySelector('#contractContent #hinhthuctraluong').innerText = print[0]
                    .HINH_THUC_TRA_LUONG;
                document.querySelector('#contractContent #phucap').innerText = print[0].PHU_CAP_GOM;
                // document.querySelector('#contractContent #khenthuong').innerText = print[0].;
                document.querySelector('#contractContent #chedonangluong').innerText = print[0].CHE_DO_NANG_LUONG;
                document.querySelector('#contractContent #chedonghingoi').innerText = print[0].CHE_DO_NGHI_NGOI;
                document.querySelector('#contractContent #nhungthoathuankhac').innerText = print[0]
                    .NHUNG_THOA_THUAN_KHAC;
                // document.querySelector('#contractContent #dieukhoanthihanh').innerText = print[0].GHI_CHU;
                // console.log(document.querySelector('#contractContent #BEN_ACT'));
                document.querySelector('#contractEditor').value = document.querySelector('#contractContent')
                    .innerHTML
            });
        }

        function printContract() {
            var useDarkMode = window.matchMedia('(prefers-color-scheme: white)').matches;
            tinymce.init({
                selector: 'textarea#contractEditor',
                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap  emoticons',
                imagetools_cors_hosts: ['picsum.photos'],
                menubar: false,
                // 'file edit view insert format tools table help'
                toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | ltr rtl',
                // insertfile image media template link anchor codesample
                toolbar_sticky: false,
                autosave_ask_before_unload: false,
                autosave_interval: '30s',
                autosave_prefix: '{path}{query}-{id}-',
                autosave_restore_when_empty: false,
                autosave_retention: '2m',
                image_advtab: true,
                link_list: [{
                        title: 'My page 1',
                        value: 'https://www.tiny.cloud'
                    },
                    {
                        title: 'My page 2',
                        value: 'http://www.moxiecode.com'
                    }
                ],
                image_list: [{
                        title: 'My page 1',
                        value: 'https://www.tiny.cloud'
                    },
                    {
                        title: 'My page 2',
                        value: 'http://www.moxiecode.com'
                    }
                ],
                image_class_list: [{
                        title: 'None',
                        value: ''
                    },
                    {
                        title: 'Some class',
                        value: 'class-name'
                    }
                ],
                importcss_append: true,
                file_picker_callback: function(callback, value, meta) {
                    /* Provide file and text for the link dialog */
                    if (meta.filetype === 'file') {
                        callback('https://www.google.com/logos/google.jpg', {
                            text: 'My text'
                        });
                    }

                    /* Provide image and alt text for the image dialog */
                    if (meta.filetype === 'image') {
                        callback('https://www.google.com/logos/google.jpg', {
                            alt: 'My alt text'
                        });
                    }

                    /* Provide alternative source and posted for the media dialog */
                    if (meta.filetype === 'media') {
                        callback('movie.mp4', {
                            source2: 'alt.ogg',
                            poster: 'https://www.google.com/logos/google.jpg'
                        });
                    }
                },
                templates: [{
                        title: 'New Table',
                        description: 'creates a new table',
                        content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                    },
                    {
                        title: 'Starting my story',
                        description: 'A cure for writers block',
                        content: 'Once upon a time...'
                    },
                    {
                        title: 'New list with dates',
                        description: 'New List with dates',
                        content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                    }
                ],
                template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                height: 600,
                image_caption: true,
                quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quicktable',
                noneditable_noneditable_class: 'mceNonEditable',
                toolbar_mode: 'sliding',
                contextmenu: 'link image imagetools table',
                skin: useDarkMode ? 'oxide-dark' : 'oxide',
                content_css: useDarkMode ? 'dark' : 'default',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });
        }
    </script>
</body>

</html>
