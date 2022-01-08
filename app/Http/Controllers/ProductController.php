<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function add_product() {
        $category = DB::table('danhmuc')->get();
        return view('admin.add-product')->with('category',$category);
    }
    // public function all_product() {
    //     return view('admin.all-product');

    // }
    public function all_product()
    {
        $product = DB::table('sanpham')->get();
        $manager_category = view('admin.all-product')->with('product', $product);
        return view('admin')->with('admin.ll-product', $manager_category);
    }
    public function save_product(Request $request) {
        $data = array();
        $data['tenSP'] = $request -> product_name;
        $data['donGia'] = $request -> product_donGia;
        $data['soLuongCon'] = $request -> product_soLuongCon;
        $data['maDM'] = $request -> product_maDM;
        $data['kichThuoc'] = $request -> product_kichThuoc;
        $data['moTa'] = $request -> product_moTa;
        DB::table('sanpham')->insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function edit_product($maDM) {
        $edit_category = DB::table('danhmuc')-> where('maDM',$maDM) -> get();
        $manager_category = view('admin.edit-category') -> with('edit_category',$edit_category);
        return view('admin') -> with('admin.edit-category',$manager_category);
    }

    public function update_product(Request $request,$maDM) {
        $data = array();
        $data['tenDM'] = $request -> category_name;
        DB::table('danhmuc')-> where('maDM',$maDM)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function del_product($maDM) {
        DB::table('danhmuc')-> where('maDM',$maDM)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    // 
    public function show_all_product()
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

        return view('page.show_all_product')->with('sanphambc', $distinct);
    }
}
