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
    public function add_giohang(Request $request) {

        $maSP = $request->maSP;

        $sanpham = DB::table('sanpham')
        ->join('hinhanh', 'sanpham.masp', '=', 'hinhanh.masp')
        ->where('sanpham.maSP', $maSP) ->first();

        $data['id'] = $request->maSP;
        $data['qty'] = $request->soluong;
        $data['name'] = $sanpham->tenSP;
        $data['price'] = $sanpham->donGia;
        $data['options']['image'] = $sanpham->tenHA;
        $data['weight'] = $sanpham->soLuongCon;
        Cart::add($data);

        return Redirect::to('/giohang');
    }

    //xoá
    public function del_giohang($rowId) {

        Cart::update($rowId, 0);
        return Redirect::to('/giohang');
    }

    //change
    public function change(Request $request) {
        $data = $request->all();
        $rowId = $data['rowid'];
        $sl = $data['sl'];
        Cart::update($rowId, $sl);
        print_r($data);
    }
}
