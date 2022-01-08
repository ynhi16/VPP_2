<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

session_start();
class CategoryProduct extends Controller
{
    public function add_category_product() {
        return view('admin.add-category');
    }
    public function all_category_product() {
        $all_category = DB::table('danhmuc')-> get();
        $manager_category = view('admin.all-category') -> with('all_category',$all_category);
        return view('admin') -> with('admin.all-category',$manager_category);
        
    }
    public function save_category(Request $request) {
        $data = array();
        $data['tenDM'] = $request -> category_name;
        DB::table('danhmuc')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('add-category-product');
    }
    public function edit_category($maDM) {
        $edit_category = DB::table('danhmuc')-> where('maDM',$maDM) -> get();
        $manager_category = view('admin.edit-category') -> with('edit_category',$edit_category);
        return view('admin') -> with('admin.edit-category',$manager_category);
    }

    public function update_category(Request $request,$maDM) {
        $data = array();
        $data['tenDM'] = $request -> category_name;
        DB::table('danhmuc')-> where('maDM',$maDM)->update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }
    public function del_category($maDM) {
        DB::table('danhmuc')-> where('maDM',$maDM)->delete();
        Session::put('message','Xóa danh mục sản phẩm thành công');
        return Redirect::to('all-category-product');
    }

    //End Function Admin 
    public function show_category_home($maDM){
        
        $get = DB::table('sanpham')
        -> join('hinhanh', 'sanpham.maSP', '=', 'hinhanh.maSP')
        -> join('danhmuc', 'sanpham.maDM', '=', 'danhmuc.maDM')->where('sanpham.maDM',$maDM)->get();
        $distinct = null;
        $tenDM = DB::table('danhmuc')->where('danhmuc.maDM',$maDM)->get();
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

        return view('page.show_category')->with('sanphambc', $distinct)->with('maDM',$maDM)->with('ten',$tenDM);
        
        
    }
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

        return view('page.chitietsanpham')->with('sanphamct', $sanphamct)->with('sanphambc', $distinct)->with('hinhanhs', $hinhanhs)->with('phanloaisp', $phanloaisp);
    }
}
