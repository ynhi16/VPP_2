<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

class GioHangController extends Controller
{
    //
    ///thêm
    public function add_giohang(Request $request)
    {

        $maSP = $request->maSP;
        $key = $request->phanloai;
        $sl = $request->soluong;

        $pl = DB::table('phanloai')->where('maSP', $maSP)->get();

        $sanpham = DB::table('sanpham')
            ->join('hinhanh', 'sanpham.masp', '=', 'hinhanh.masp')
            ->join('phanloai', 'sanpham.masp', '=', 'phanloai.masp')
            ->where('sanpham.maSP', $maSP)->where('tenPL', $pl[$key]->tenPL)->first();

        $data['id'] = $request->maSP;
        $data['qty'] = $sl[$key];
        $data['name'] = $sanpham->tenSP;
        $data['price'] = $sanpham->donGia;
        $data['options']['image'] = $sanpham->tenHA;
        $data['options']['phanloai'] = $pl[$key]->tenPL;
        $data['weight'] = '123';
        Cart::add($data);

        return Redirect::to('/giohang');
    }

    //xoá
    public function del_giohang($rowId)
    {

        Cart::update($rowId, 0);
        return Redirect::to('/giohang');
    }

    //update
    public function update_giohang($rowId, $soluong)
    {
        Cart::update($rowId, $soluong);
        return Redirect::to('/giohang');
    }

    //thêm hoá đơn
    public function add_hoadon(Request $request)
    {

        $maND = Session::get('nguoidung_id');

        $today = date("Y-m-d");

        $data = array();

        $data['maND'] = $maND;
        $data['ngayLap'] = $today;
        $data['nguoiNhan'] = $request->hoten;
        $data['SDT'] = $request->sdt;
        $data['diaChi'] = $request->sonha;
        $data['trangthai'] = "Chờ xác nhận";
        $data['maPX'] = $request->phuongxa;

        if ($data['nguoiNhan'] == null || $data['SDT'] == null || $data['diaChi'] == null || $data['maPX'] == null) {
            Session::put("msg", "Thông tin không hợp lệ.");
            return Redirect::to('/thanhtoan');
        }

        $result1 = DB::table('hoadon')->insert($data);

        if ($result1) {

            $getHD = DB::table('hoadon')->orderby('maHD', 'desc')->first();

            $maHD = $getHD->maHD;

            $giohang = Cart::content();

            foreach($giohang as $key => $value) {

                $item = array();
                $item['maHD'] = $maHD;
                $item['maSP'] = $value->id;
                $item['soLuong'] = $value->qty;
                $item['donGia'] = $value->price;
                $item['phanLoai'] = $value->options->phanloai;

                $result = DB::table('chitiethoadon')->insert($item);
            }

            if($maND) {

                Cart::destroy();
                return Redirect::to('/donmua');
            } else {

                Cart::destroy();
                return Redirect::to('/giohang');
            }
        } else {

            Session::put("msg", "Thông tin không hợp lệ.");
            return Redirect::to('/thanhtoan');
        }
    }
    
    //huỷ đơn mua
    public function del_hoadon($maHD) {

        $get = DB::table('hoadon')
            ->where('maHD', $maHD)
            ->update(['trangthai' => "Đơn đã huỷ"]);

        return Redirect::to('/donmua');
    }
}
