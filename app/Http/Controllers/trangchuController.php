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
            ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')
            ->orderby('sanpham.maSP', 'desc')
            ->get();
        $orders = DB::table('sanpham')
            ->join('chitiethoadon', 'chitiethoadon.maSP', '=', 'sanpham.maSP')
            ->select('chitiethoadon.maSP', 'tenSP', DB::raw('SUM(soLuong) as tong'))
            ->groupBy('chitiethoadon.maSP', 'tenSP')
            ->limit(4)
            ->get();
        $distinct1 = array();
        foreach ($orders as $key => $value) {
            $orders_id = $value->maSP;
            // echo $orders_id;
            $get1 = DB::table('sanpham')
                ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')
                ->select('sanpham.maSP', 'sanpham.tenSP', 'sanpham.donGia', 'hinhanh.tenHA')
                ->where('sanpham.maSP', $orders_id)
                ->groupby('sanpham.maSP', 'sanpham.tenSP', 'sanpham.donGia', 'hinhanh.tenHA')
                ->limit(1)
                ->get();
            // echo '<pre>';
            // print_r($get1);
            // echo '</pre>';

            foreach ($get1 as $key => $value) {

                $distinct1[] = $value;
                // echo '<pre>';
                // print_r($distinct1);
                // echo '</pre>';
            }
        }
        //exit;
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

        return view('page.trangchu')->with('sanphambc1', $distinct1)->with('sanphambc', $distinct);;
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
            }
            else {

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
        // $distinct = null;
        // foreach ($get as $key => $value) {
        //     if ($distinct != null) {
        //         $i = 0;
        //         foreach ($distinct as $key => $dis) {
        //             if ($dis->maSP == $value->maSP) {

        //                 $i = 1;
        //             }
        //         }
        //         if ($i == 0) {
        //             $distinct[] = $value;
        //         }
        //     } else {
        //         $distinct = array();
        //         $distinct[] = $value;
        //     }
        $get = DB::table('sanpham')
            ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')
            ->orderby('sanpham.maSP', 'desc')
            ->get();
        $orders = DB::table('sanpham')
            ->join('chitiethoadon', 'chitiethoadon.maSP', '=', 'sanpham.maSP')
            ->select('chitiethoadon.maSP', 'tenSP', DB::raw('SUM(soLuong) as tong'))
            ->groupBy('chitiethoadon.maSP', 'tenSP')
            ->limit(4)
            ->get();
        $distinct1 = array();
        foreach ($orders as $key => $value) {
            $orders_id = $value->maSP;
            // echo $orders_id;
            $get1 = DB::table('sanpham')
                ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')
                ->select('sanpham.maSP', 'sanpham.tenSP', 'sanpham.donGia', 'hinhanh.tenHA')
                ->where('sanpham.maSP', $orders_id)
                ->groupby('sanpham.maSP', 'sanpham.tenSP', 'sanpham.donGia', 'hinhanh.tenHA')
                ->limit(1)
                ->get();
            // echo '<pre>';
            // print_r($get1);
            // echo '</pre>';

            foreach ($get1 as $key => $value) {

                $distinct1[] = $value;
                // echo '<pre>';
                // print_r($distinct1);
                // echo '</pre>';
            }
        }
        $maND = Session::get('nguoidung_id');
        $nguoidung = DB::table('nguoidung')
            ->where('maND', $maND)->get();
        return view('page.chitietsanpham')->with('sanphamct', $sanphamct)->with('sanphambc1', $distinct1)->with('hinhanhs', $hinhanhs)->with('phanloaisp', $phanloaisp)->with('nguoidung', $nguoidung);
    }
    public function timkiem(Request $request)
    {
        $key = $request->tk;
        $all_category = DB::table('danhmuc')->get();
        $search_product = DB::table('sanpham')
            ->where('tenSP', 'like', '%' . $key . '%')->get();
        // echo '<pre>';
        // print_r($search_product);
        // echo '</pre>';
        $distinct1 = array();
        foreach ($search_product as $key => $value) {
            $orders_id = $value->maSP;
            // echo $orders_id;
            $get1 = DB::table('sanpham')
                ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')
                ->select('sanpham.maSP', 'sanpham.tenSP', 'sanpham.donGia', 'hinhanh.tenHA')
                ->where('sanpham.maSP', $orders_id)
                ->groupby('sanpham.maSP', 'sanpham.tenSP', 'sanpham.donGia', 'hinhanh.tenHA')
                ->limit(1)
                ->get();
            // echo '<pre>';
            // print_r($get1);
            // echo '</pre>';

            foreach ($get1 as $key => $value) {

                $distinct1[] = $value;
                // echo '<pre>';
                // print_r($distinct1);
                // echo '</pre>';
            }
        }
        //exit;
        return view('page.tk')->with('sanphambc1', $distinct1);
    }
    public function auto_ajax(Request $request)
    {
        $data = $request->all();
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('sanpham')
                ->where('tenSP', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($data as $row) {
                $output .= '
               <li><a href="#" style="text-decoration: none; color: black">' . $row->tenSP . '</a></li>
               ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

}
