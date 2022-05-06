<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

session_start();
class ProductController extends Controller
{
    public function add_product()
    {
        $category = DB::table('danhmuc')->get();
        return view('admin.add-product')->with('category', $category);
    }
    // public function all_product() {
    //     return view('admin.all-product');

    // }
    public function all_product()
    {
        $product = DB::table('sanpham')
            ->join('danhmuc', 'sanpham.maDM', '=', 'danhmuc.maDM')->get();
        $manager_category = view('admin.all-product')->with('product', $product);
        return view('admin')->with('admin.all-product', $manager_category);
    }
    public function save_product(Request $request)
    {
        $data = array();
        $data['tenSP'] = $request->product_name;
        $data['donGia'] = $request->product_donGia;
        $data['soLuongCon'] = $request->product_soLuongCon;
        $data['maDM'] = $request->product_maDM;
        $data['kichThuoc'] = $request->product_kichThuoc;
        $data['moTa'] = $request->product_moTa;
        DB::table('sanpham')->insert($data);
        $product = DB::table('sanpham')->orderby('maSP', 'desc')->limit(1)->get('maSP');

        foreach ($product as $key => $value) {
            $product_id = $value->maSP;
        }
        $files = array();
        $dataimage = array();
        $get_image = $request->file('files');
        if ($get_image) {
            foreach ($get_image as $image) {
                $name = $image->getClientOriginalName();
                //$image->move('public/frontend/img', $name);
                $dataimage['maSP'] = $product_id;
                $dataimage['tenHA'] = $name;
                DB::table('hinhanh')->insert($dataimage);
            }
        }
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function edit_product($maSP)
    {
        $category = DB::table('danhmuc')->get();
        $edit_product = DB::table('sanpham')
            ->where('maSP', $maSP)
            ->get();
        $manager_product = view('admin.edit-product')->with('edit_product', $edit_product)->with('category', $category);
        return view('admin')->with('admin.edit-product', $manager_product);
    }

    public function update_product(Request $request, $maSP)
    {
        $data = array();
        $data['tenSP'] = $request->product_name;
        $data['donGia'] = $request->product_donGia;
        $data['soLuongCon'] = $request->product_soLuongCon;
        $data['maDM'] = $request->product_maDM;
        $data['kichThuoc'] = $request->product_kichThuoc;
        $data['moTa'] = $request->product_moTa;
        DB::table('sanpham')->where('maSP', $maSP)->update($data);
        $dataimage = array();
        $get_image = $request->file('files');
        if ($get_image) {
            foreach ($get_image as $image) {
                $name = $image->getClientOriginalName();
                $image->move('public/frontend/img', $name);
                $dataimage['maSP'] =  $maSP;
                $dataimage['tenHA'] = $name;
                DB::table('hinhanh')->where('maSP', $maSP)->update($dataimage);
            }
        }
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function del_product($maSP)
    {
        DB::table('sanpham')->where('maSP', $maSP)->delete();
        DB::table('hinhanh')->where('maSP', $maSP)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }
    // 
    public function show_all_product()
    {
        $get = DB::table('sanpham')
            ->join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')
            ->orderby('sanpham.maSP','desc')
            ->paginate(8);
        // echo '<pre>';
        // print_r($get);
        // echo '</pre>';
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
        // }
        return view('page.show_all_product')->with('sanphambc', $get);
    }
}
