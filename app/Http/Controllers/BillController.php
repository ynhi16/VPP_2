<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class BillController extends Controller
{
    public function show_bill_detail($maHD) {
        $bill_detail = DB::table('hoadon')
        ->join('chitiethoadon','chitiethoadon.maHD','=','hoadon.maHD')
        ->join('sanpham','sanpham.maSP','=','chitiethoadon.maSP')
        ->select('sanpham.tenSP','chitiethoadon.phanLoai','chitiethoadon.soLuong','chitiethoadon.donGia','chitiethoadon.maHD')
        ->where('chitiethoadon.maHD',$maHD)->get();
        // echo '<pre>';
        // print_r($bill_detail);
        // echo '</pre>';
        // exit;
        $manager_bill_detail = view('admin.bill-detail')->with('bill_detail',$bill_detail);
        return view('admin')->with('admin.bill-detail',$manager_bill_detail);
        
    }
 
    public function show_all_bill() {
        $all_bill = DB::table('hoadon')
        ->join('nguoidung','hoadon.maND','=','nguoidung.maND')
        ->select('hoadon.*','nguoidung.tenND')
        ->orderby('hoadon.maND','desc')->get();
        // echo '<pre>';
        // print_r($all_bill) ;
        // echo '</pre>';
        // exit;
        $manager_bill = view('admin.all-bill')->with('all_bill',$all_bill);
        return view('admin')->with('admin.all-bill',$manager_bill);
    }
    public function update_bill(Request $request, $maHD)
    {
        $data = array();
        $data['trangThai'] = 'Đã xác nhận';
        DB::table('hoadon')->where('maHD',$maHD)->update($data);
        Session::put('message', 'Đã xác nhận');
        return Redirect::to('all-bill');
    }
    public function del_bill($maHD)
    {
        DB::table('chitiethoadon')->where('maHD', $maHD)->delete();
        DB::table('hoadon')->where('maHD', $maHD)->delete();
        
        Session::put('message', 'Xóa hóa đơn thành công');
        return Redirect::to('all-bill');
    }
}
