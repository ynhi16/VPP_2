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
}
