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
    public function index()
    {
        return view('page.khachhang_home');
    }
    //dang nhap
    // public function login() {
    //     return view('page.khachhang_home');
    // }

    public function giohang()
    {
        $get = DB::table('sanpham')
        -> join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')->get();

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

        return view('khachhang.giohang')->with('sanphambc', $distinct);
    }
    ///trang thanh toán
    public function thanhtoan()
    {
        $maND = Session::get('nguoidung_id');

        $get = DB::table('nguoidung')
        ->join('phuongxa', 'nguoidung.maPX', '=', 'phuongxa.idPX')
        -> join('quanhuyen', 'quanhuyen.IDQH', '=', 'phuongxa.IDQH')
        -> join('tinhthanh', 'quanhuyen.IDTT', '=', 'tinhthanh.IDTT')
        ->where('nguoidung.maND', $maND)->first();
        return view('khachhang.thanhtoan')->with('nguoidung', $get);
    }

    public function canhan()
    {

        $maND = Session::get('nguoidung_id');

        $tinhthanh = DB::table('tinhthanh')->get();
        $quanhuyen = DB::table('quanhuyen')->get();
        $phuongxa = DB::table('phuongxa')->get();

        $nguoidung = DB::table('nguoidung')
        -> join('phuongxa', 'phuongxa.IDPX', '=', 'nguoidung.maPX')
        -> join('quanhuyen', 'quanhuyen.IDQH', '=', 'phuongxa.IDQH')
        -> join('tinhthanh', 'quanhuyen.IDTT', '=', 'tinhthanh.IDTT')
        ->where('maND', $maND)->get();

        return view('khachhang.canhan')->with('nguoidung', $nguoidung)->with('tinhthanh', $tinhthanh)->with('quanhuyen', $quanhuyen)->with('phuongxa', $phuongxa);
    }
    //cập nhật thông tin cá nhân
    public function capnhat_ttcn(Request $request)
    {
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
        $data['maPX'] = $request->phuongxa;
        $data['maQuyen'] = $request->maQuyen;

        DB::table('nguoidung')->where('maND', $request->maND)->update($data);
        return Redirect::to('canhan');
    }
    public function matkhau()
    {
        return view('khachhang.doimatkhau');
    }
    //đổi mật khẩu
    public function capnhat_mk(Request $request)
    {
        $mkcu = $request->mkcu;
        $mkmoi = $request->mkmoi;
        $mkmoi2 = $request->mkmoi2;

        $maND = Session::get('nguoidung_id');
        $nguoidung = DB::table('nguoidung')->where('maND', $maND)->first();
        $matKhau = $nguoidung->matKhau;

        if ($mkmoi !== $mkmoi2 || $mkcu == '' || $mkmoi == '' || $mkmoi2 == '' || $mkcu !== $matKhau) {

            Session::put('capnhat', "Thông tin không hợp lệ!");
            return Redirect::to('matkhau');
        } else {
             
            $data = array();

            $data['maND'] = $nguoidung->maND;
            $data['tenND'] = $nguoidung->tenND;
            $data['gioiTinh'] = $nguoidung->gioiTinh;
            $data['ngaySinh'] = $nguoidung->ngaySinh;
            $data['SDT'] = $nguoidung->SDT;
            $data['email'] = $nguoidung->email;
            $data['diaChi'] = $nguoidung->diaChi;
            $data['taiKhoan'] = $nguoidung->taiKhoan;
            $data['matKhau'] = $mkmoi;
            $data['maPX'] = $nguoidung->maPX;
            $data['vaiTro'] = $nguoidung->vaiTro;
            $data['maQuyen'] = $nguoidung->maQuyen;

            DB::table('nguoidung')->where('maND', $request->maND)->update($data);

            return Redirect::to('canhan');
        }
    }
    //đơn mua
    public function donmua() {

        return view('khachhang.donmua');
    }
}
