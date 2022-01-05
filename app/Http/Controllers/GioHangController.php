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
        $key = $request->phanloai;
        $sl = $request->soluong;

        $pl = DB::table('phanloai') -> where ('maSP', $maSP) ->get();

        $sanpham = DB::table('sanpham')
        ->join('hinhanh', 'sanpham.masp', '=', 'hinhanh.masp')
        ->join('phanloai', 'sanpham.masp', '=', 'phanloai.masp')
        ->where('sanpham.maSP', $maSP)->where ('tenPL', $pl[$key]->tenPL) ->first();

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
