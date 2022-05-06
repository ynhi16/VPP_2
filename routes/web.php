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
Route::post('/auto-ajax','trangchuController@auto_ajax');
//chi tiết sản phẩm
Route::get('/chitietsanpham/{maSP}','trangchuController@chitietsanpham');
Route::post('/load-comment','trangchuController@load_comment');
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
Route::get('/danhmuc/{maDM}','CategoryProduct@show_category_home');
//Product
Route::get('/add-product','ProductController@add_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/all-product-home','ProductController@show_all_product');
Route::post('/save-product','ProductController@save_product');
Route::get('/edit-product/{maSP}','ProductController@edit_product');
Route::post('/update-product/{maSP}','ProductController@update_product');
Route::get('/del-product/{maSP}','ProductController@del_product');
//
Route::get('/all-bill','BillController@show_all_bill');
Route::get('/bill-detail/{maHD}','BillController@show_bill_detail');
Route::post('/update-bill/{maHD}','BillController@update_bill');
Route::get('/del-bill/{maHD}','BillController@del_bill');
Route::get('/del-bill-detail/{maHD}','BillController@del_bill_detail');
//
Route::get('/account','AccountProduct@show_account');
Route::post('/update-account/{maND}','AccountProduct@update_account');
Route::post('/update-account-open/{maND}','AccountProduct@update_account_open');
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
Route::get('/yeuthich','KhachHangController@yeuthich');
Route::get('/update-yeuthich/{maSP}&{tym}','KhachHangController@update_yeuthich');
Route::get('/del-yeuthich/{maSP}','KhachHangController@del_yeuthich');
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
//đánh giá
Route::get('/danhgia/{maHD}','GioHangController@danhgia');


//đang nhập đăng ký
Route::get('/dangnhap','trangchuController@dangnhap');
Route::get('/dangky','trangchuController@dangky');
//tạo tài khoản
Route::post('/add-user','trangchuController@add_user');

//Login  google
Route::get('/login-google','trangchuController@login_google');
Route::get('/google/callback','trangchuController@callback_google');



//kiểm tra đăng nhập
Route::post('/kiemtra-dangnhap','trangchuController@kiemtra_dangnhap');
//đăng xuất
Route::get('/dangxuat','trangchuController@dangxuat');

Route::get('/xtietsanpham','xTietSanPhamController@index');

//timkiem
Route::get('/find','TimKiemController@index');

Route::post('/timkiem','trangchuController@timkiem');






Route::post('/test','KhachHangController@test');
// thanh toan



Route::post('/vnpay_payment','GetPayMentController@vnpay_payment');

Route::post('/momo_payment','GetPayMentController@momo_payment');

Route::post('/onepay_payment','GetPayMentController@onepay_payment');