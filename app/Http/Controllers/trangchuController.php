<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class trangchuController extends Controller
{
    public function index()
    {
        $get = DB::table('sanpham')
            ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')->get();

        $distinct = null;
        foreach ($get as $key => $value) {
            if ($distinct != null) {
                $i = 0;
                foreach ($distinct as $key => $dis) {
                    if ($dis->maSP == $value->maSP) {

                        $i = 1;
                    }
                }
                if ($i == 0) {
                    $distinct[] = $value;
                }
            } else {
                $distinct = array();
                $distinct[] = $value;
            }
        }

        return view('page.trangchu')->with('sanphambc', $distinct);
    }
    public function dangnhap()
    {
        return view('dangnhap');
    }
    public function dangky()
    {
        return view('dangky');
    }
    //đăng xuất
    public function dangxuat()
    {
        Session::put('nguoidung_name', null);
        Session::put('nguoidung_id', null);

        return Redirect::to('/');
    }

    //kiểm tra đăng nhập
    public function kiemtra_dangnhap(Request $request)
    {
        $taikhoan = $request->taikhoan;
        $matkhau = $request->matkhau;

        $data = DB::table('nguoidung')->where('taikhoan', $taikhoan)->where('matkhau', $matkhau)->first();

        if ($data) {

            $quyen = $data->maQuyen;

            if ($quyen == 3) {

                Session::put('nguoidung_name', $data->tenND);
                Session::put('nguoidung_id', $data->maND);

                // return Redirect::to('/khachhang');
                return Redirect::to('/');
            } else if ($quyen == 1) {

                return Redirect::to('/admin');
            } else {

                return Redirect::to('/dangnhap');
            }
        } else {

            Session::put('message', 'Tai khoan hoac mat khau sai. Yeu cau nhap lai');

            return Redirect::to('/dangnhap');
        }
    }
    //chi tiết sản phẩm
    public function chitietsanpham($maSP)
    {

        //lấy thông tin sản phẩm theo maSP
        $sanphamct = DB::table('sanpham')
            ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')
            ->join('danhmuc', 'sanpham.maDM', '=', 'danhmuc.maDM')
            ->where('sanpham.maSP', $maSP)->get();
        //lấy phân loại sản phẩm
        $phanloaisp = DB::table('sanpham')
            ->join('phanloai', 'sanpham.maSP', '=', 'phanloai.maSP')
            ->where('sanpham.maSP', $maSP)->get();
        //lấy mảng các đường dẫn hình ảnh
        $hinhanhs = [];
        foreach ($sanphamct as $key => $value) {
            $hinhanhs[] = "{{asset('public/frontend/img/'.$value->tenHA)}}";
        }

        //lấy danh sách sản phẩm bán chạy
        $get = DB::table('sanpham')
            ->where('maDM', 2)
            ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')->get();
        //lọc danh sách sản phẩm bán chạy
        $distinct = null;
        foreach ($get as $key => $value) {
            if ($distinct != null) {
                $i = 0;
                foreach ($distinct as $key => $dis) {
                    if ($dis->maSP == $value->maSP) {

                        $i = 1;
                    }
                }
                if ($i == 0) {
                    $distinct[] = $value;
                }
            } else {
                $distinct = array();
                $distinct[] = $value;
            }
        }



        //kiểm tra sản phẩm yêu thích
        $tym = "tym-trang.png";
        $maND = Session::get("nguoidung_id");
        if ($maND) {
            $yt = DB::table('yeuthich')->where("maND", $maND)->where('maSP', $maSP)->first();

            if ($yt) {

                $tym = "tym-den.png";
            }
        }

        return view('page.chitietsanpham')->with('sanphamct', $sanphamct)->with('sanphambc', $distinct)->with('hinhanhs', $hinhanhs)->with('phanloaisp', $phanloaisp)->with('tym', $tym);
    }


    //tạo tài khoản
    public function add_user(Request $request)
    {

        $data = array();
        $data['tenND'] = $request->hoten;
        $data['gioiTinh'] = null;
        $data['ngaySinh'] = null;
        $data['SDT'] = null;
        $data['email'] = $request->email;
        $data['diaChi'] = null;
        $data['taiKhoan'] = $request->taikhoan;
        $data['matKhau'] = $request->matkhau;
        $data['maPX'] = null;
        $data['maQuyen'] = 3;

        if ($request->hoten == null || $request->email == null || $request->taikhoan == null || $request->matkhau == null) {

            Session::put('msg', "Thông tin không hợp lệ!");
            return Redirect::to('/dangky');
        } else {

            $get1 = DB::table('nguoidung')->where('email', $request->email)->first();
            $get2 = DB::table('nguoidung')->where('taiKhoan', $request->taikhoan)->first();

            if ($get1 || $get2) {

                Session::put('msg', "Tài khoản đã tồn tại!");
                return Redirect::to('/dangky');
            } else {

                $result = DB::table('nguoidung')->insert($data);

                if ($result) {

                    $thongtin = DB::table('nguoidung')->orderby('maND', 'desc')->first();

                    Session::put('nguoidung_name', $thongtin->tenND);
                    Session::put('nguoidung_id', $thongtin->maND);

                    return Redirect::to('/');
                } else {

                    Session::put('msg', "Đăng ký thất bại!");
                    return Redirect::to('/dangky');
                }
            }
        }

    }
}
