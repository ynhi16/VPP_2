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
    public function index() {
        return view('page.trangchu');
    }
    public function dangnhap() {
        return view('dangnhap');
    }
    public function dangky() {
        return view('dangky');
    }

    //kiểm tra đăng nhập
    public function kiemtra_dangnhap(Request $request) {
        $taikhoan = $request->taikhoan;
        $matkhau = $request->matkhau;

        $data = DB::table('nguoidung')->where('taikhoan', $taikhoan)->where('matkhau', $matkhau)->first();

        if ($data) {

            Session::put('nguoidung_name', $data->tenND);
            Session::put('nguoidung_id', $data->maND);

            $quyen = $data->maQuyen;

            if ($quyen ==3) {

                return Redirect::to('/dangnhap');
            } else {

                return Redirect::to('/khachhang');
            }
        } else {

            Session::put('message', 'Tai khoan hoac mat khau sai. Yeu cau nhap lai');

            return Redirect::to('/dangnhap');
        }
    }
}
