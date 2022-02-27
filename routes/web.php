<?php

use App\Http\Controllers\BacLuongController;
use App\Http\Controllers\CanBoGDController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\DMChiPhiCTController;
use App\Http\Controllers\DMChungChiBDController;
use App\Http\Controllers\DMDanhHieuController;
use App\Http\Controllers\DMHeSoPCController;
use App\Http\Controllers\DMHinhThucBDController;
use App\Http\Controllers\DMKhenThuongController;
use App\Http\Controllers\DMKyLuatController;
use App\Http\Controllers\DMLoaiHDController;
use App\Http\Controllers\DMLuongCBController;
use App\Http\Controllers\DMMucDichCTController;
use App\Http\Controllers\DMPhuongXaController;
use App\Http\Controllers\DMQuanHeController;
use App\Http\Controllers\DMQuanHuyenController;
use App\Http\Controllers\DMTinhTPController;
use App\Http\Controllers\DMTrinhDoLLCTController;
use App\Http\Controllers\DMTrinhDoQLGDController;
use App\Http\Controllers\DMTrinhDoQLNNController;
use App\Http\Controllers\DMTrinhDoTHController;
use App\Http\Controllers\DMXuatThanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NgachController;
use App\Http\Controllers\QuanLyHDLDController;
use App\Http\Controllers\TuyenDungController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('pages.index');
// });

Route::resource('/', HomeController::class);

//Danh muc chung chi boi duong
Route::get('chungchiBD/destroy/{id}', [DMChungChiBDController::class, 'destroy']);
Route::post('chungchiBD/update/{data}', [DMChungChiBDController::class, 'update']);
Route::resource('chungchiBD', DMChungChiBDController::class);

//Danh muc chi phi cong tac
Route::get('chiphiCT/destroy/{id}', [DMChiPhiCTController::class, 'destroy']);
Route::post('chiphiCT/update/{data}', [DMChiPhiCTController::class, 'update']);
Route::resource('chiphiCT', DMChiPhiCTController::class);
Route::resource('danhmuc', DanhMucController::class);

//Danh muc danh hieu
Route::get('danhhieu/destroy/{id}', [DMDanhHieuController::class, 'destroy']);
Route::post('danhhieu/update/{data}', [DMDanhHieuController::class, 'update']);
Route::resource('danhhieu', DMDanhHieuController::class);

//Danh muc he so phu cap
Route::get('hesophucap/destroy/{id}', [DMHeSoPCController::class, 'destroy']);
Route::post('hesophucap/update/{data}', [DMHeSoPCController::class, 'update']);
Route::resource('hesophucap', DMHeSoPCController::class);

//Danh muc hinh thuc boi duong
Route::get('hinhthucBD/destroy/{id}', [DMHinhThucBDController::class, 'destroy']);
Route::post('hinhthucBD/update/{data}', [DMHinhThucBDController::class, 'update']);
Route::resource('hinhthucBD', DMHinhThucBDController::class);

//Danh muc khen thuong
Route::get('khenthuong/destroy/{id}', [DMKhenThuongController::class, 'destroy']);
Route::post('khenthuong/update/{data}', [DMKhenThuongController::class, 'update']);
Route::resource('khenthuong', DMKhenThuongController::class);

//Danh muc ky luat
Route::get('kyluat/destroy/{id}', [DMKyLuatController::class, 'destroy']);
Route::post('kyluat/update/{data}', [DMKyLuatController::class, 'update']);
Route::resource('kyluat', DMKyLuatController::class);

//Danh muc loai hop dong
Route::get('loaiHD/destroy/{id}', [DMLoaiHDController::class, 'destroy']);
Route::post('loaiHD/update/{data}', [DMLoaiHDController::class, 'update']);
Route::resource('loaiHD', DMLoaiHDController::class);

//Danh muc luong can ban
Route::get('luongCB/destroy/{id}', [DMLuongCBController::class, 'destroy']);
Route::post('luongCB/update/{data}', [DMLuongCBController::class, 'update']);
Route::resource('luongCB', DMLuongCBController::class);

//Danh muc muc dich cong tac
Route::get('mucdichCT/destroy/{id}', [DMMucDichCTController::class, 'destroy']);
Route::post('mucdichCT/update/{data}', [DMMucDichCTController::class, 'update']);
Route::resource('mucdichCT', DMMucDichCTController::class);

//Danh muc phuong xa
Route::get('phuongxa/destroy/{id}', [DMPhuongXaController::class, 'destroy']);
Route::post('phuongxa/update/{data}', [DMPhuongXaController::class, 'update']);
Route::resource('phuongxa', DMPhuongXaController::class);

//Danh muc quan he
Route::get('quanhe/destroy/{id}', [DMQuanHeController::class, 'destroy']);
Route::post('quanhe/update/{data}', [DMQuanHeController::class, 'update']);
Route::resource('quanhe', DMQuanHeController::class);

//Danh muc quan huyen
Route::get('quanhuyen/destroy/{id}', [DMQuanHuyenController::class, 'destroy']);
Route::post('quanhuyen/update/{data}', [DMQuanHuyenController::class, 'update']);
Route::resource('quanhuyen', DMQuanHuyenController::class);

//Danh muc tinh thanh pho
Route::get('tinhTP/destroy/{id}', [DMTinhTPController::class, 'destroy']);
Route::post('tinhTP/update/{data}', [DMTinhTPController::class, 'update']);
Route::resource('tinhTP', DMTinhTPController::class);

//Danh muc trinh do ly luan chinh tri
Route::get('trinhdoLLCT/destroy/{id}', [DMTrinhDoLLCTController::class, 'destroy']);
Route::post('trinhdoLLCT/update/{data}', [DMTrinhDoLLCTController::class, 'update']);
Route::resource('trinhdoLLCT', DMTrinhDoLLCTController::class);

//Danh muc trinh do quan ly giao duc
Route::get('trinhdoQLGD/destroy/{id}', [DMTrinhDoQLGDController::class, 'destroy']);
Route::post('trinhdoQLGD/update/{data}', [DMTrinhDoQLGDController::class, 'update']);
Route::resource('trinhdoQLGD', DMTrinhDoQLGDController::class);

//Danh muc trinh do tin hoc
Route::get('trinhdoTH/destroy/{id}', [DMTrinhDoTHController::class, 'destroy']);
Route::post('trinhdoTH/update/{data}', [DMTrinhDoTHController::class, 'update']);
Route::resource('trinhdoTH', DMTrinhDoTHController::class);

//Danh muc trinh do quan ly nha nuoc
Route::get('trinhdoQLNN/destroy/{id}', [DMTrinhDoQLNNController::class, 'destroy']);
Route::post('trinhdoQLNN/update/{data}', [DMTrinhDoQLNNController::class, 'update']);
Route::resource('trinhdoQLNN', DMTrinhDoQLNNController::class);

//Danh muc xuat than
Route::get('xuatthan/destroy/{id}', [DMXuatThanController::class, 'destroy']);
Route::post('xuatthan/update/{data}', [DMXuatThanController::class, 'update']);
Route::resource('xuatthan', DMXuatThanController::class);

//Bac luong
Route::get('bacluong/destroy/{id}', [BacLuongController::class, 'destroy']);
Route::post('bacluong/update/{data}', [BacLuongController::class, 'update']);
Route::resource('bacluong', BacLuongController::class);


//Quản lý hợp đồng lao động
Route::post('quanlyHDLD/giahan', [QuanLyHDLDController::class, 'extendContract']);
Route::get('quanlyHDLD/destroy/{id}', [QuanLyHDLDController::class, 'destroy']);
// Route::post('quanlyHDLD/update/{data}', [QuanLyHDLDController::class, 'update']);
Route::resource('quanlyHDLD', QuanLyHDLDController::class);
//Ngach
Route::get('ngach/destroy/{id}', [NgachController::class, 'destroy']);
Route::post('ngach/update/{data}', [NgachController::class, 'update']);
Route::resource('ngach', NgachController::class);

//tuyen dung
Route::get('tuyendung/destroy/{id}', [TuyenDungController::class, 'destroy']);
Route::post('tuyendung/update/{data}', [TuyenDungController::class, 'update']);
Route::resource('tuyendung', TuyenDungController::class);

//can bo giang day
Route::get('canbo/destroy/{id}', [CanBoGDController::class, 'destroy']);
Route::resource('canbo', CanBoGDController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');