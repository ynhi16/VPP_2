<?php

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

Route::get('/test', function () {
    return view('test');
});

//front
Route::get('/','trangchuController@index');
//chi tiết sản phẩm
Route::get('/chitietsanpham/{maSP}','trangchuController@chitietsanpham');

//admin
Route::get('/admin','AdminController@index');

Route::get('/dashboard','AdminController@show_dashboard');

//Category
Route::get('/add-category-product','CategoryProduct@add_category_product');
Route::get('/edit-category/{maDM}','CategoryProduct@edit_category');
Route::get('/del-category/{maDM}','CategoryProduct@del_category');
Route::get('/all-category-product','CategoryProduct@all_category_product');
Route::post('/save-category','CategoryProduct@save_category');
Route::post('/update-category/{maDM}','CategoryProduct@update_category');
//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
//
Route::get('/all-bill','AdminController@show_all_bill');
Route::get('/bill-detail','BillController@show_bill_detail');
//
Route::get('/account','AccountProduct@show_account');
//
Route::get('/add-sale','SaleController@add_sale');
Route::get('/all-sale','SaleController@all_sale');
//shipper
Route::get('/shipper','ShipperController@index');



///khách hàng
Route::get('/khachhang','KhachHangController@index');
//dang nhap
// Route::get('/khachhangHome','KhachHangController@login');
Route::get('/giohang','KhachHangController@giohang');
Route::get('/thanhtoan','KhachHangController@thanhtoan');
Route::get('/canhan','KhachHangController@canhan');
Route::get('/matkhau','KhachHangController@matkhau');
///cập nhậT thông tin cá nhân
Route::post('/capnhat-ttcn','KhachHangController@capnhat_ttcn');
///đổi mật khẩu
Route::post('/capnhat-mk','KhachHangController@capnhat_mk');
//đơn mua
Route::get('/donmua','KhachHangController@donmua');

///giỏ hàng
Route::post('/add-giohang','GioHangController@add_giohang');
Route::get('/del-giohang/{rowId}','GioHangController@del_giohang');
Route::get('/update-giohang/{rowId}&{soluong}','GioHangController@update_giohang');

//thêm hoá đơn
Route::post('/add-hoadon','GioHangController@add_hoadon');
//khách hàng huye đơn
Route::get('/del-hoadon/{maHD}','GioHangController@del_hoadon');



//đang nhập đăng ký
Route::get('/dangnhap','trangchuController@dangnhap');
Route::get('/dangky','trangchuController@dangky');
//kiểm tra đăng nhập
Route::post('/kiemtra-dangnhap','trangchuController@kiemtra_dangnhap');
//đăng xuất
Route::get('/dangxuat','trangchuController@dangxuat');

Route::get('/chitietsanpham','ChiTietSanPhamController@index');

//timkiem
Route::get('/find','TimKiemController@index');