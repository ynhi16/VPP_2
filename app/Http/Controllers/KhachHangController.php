<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class KhachHangController extends Controller
{
    //
    public function index() {

        return view('page.khachhang_home');
    }
    //dang nhap
    // public function login() {
    //     return view('page.khachhang_home');
    // }

    public function giohang() {
        return view('khachhang.giohang');
    }

    public function canhan() {

        // $maND = Session::get('nguoidung_id');
        $maND = 1;

        $nguoidung = DB::table('nguoidung')->where('maND', $maND)->get();

        return view('khachhang.canhan')->with('nguoidung', $nguoidung);
    }
    //cập nhật thông tin cá nhân
    public function capnhat_thongtincanhan(Request $request) {
        $data = array();

        $data['maND'] = $request->maND;
        $data['tenND'] = $request->tenND;
        $data['gioiTinh'] = $request->gioiTinh;
        $data['ngaySinh'] = $request->ngaySinh;
        $data['SDT'] = $request->SDT;
        $data['email'] = $request->email;
        $data['diaChi'] = $request->diaChi;
        $data['taiKhoan'] = $request->taiKhoan;
        $data['matKhau'] = $request->matKhau;
        $data['maPX'] = $request->maPX;
        $data['vaiTro'] = $request->vaiTro;
        $data['maQuyen'] = $request->maQuyen;

        DB::table('nguoidung')-> where('maND', $$request->maND)->update($data);
        return Redirect::to('canhan');

    }
    public function matkhau() {
        return view('khachhang.doimatkhau');
    }
}

