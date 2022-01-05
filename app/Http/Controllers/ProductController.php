<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    // public function add_product() {
    //     return view('admin.add-product');
    // }
    // public function all_product() {
    //     return view('admin.all-product');
        
    // }
    public function all_product() {
        $product = DB::table('sanpham')-> get();
        $manager_category = view('admin.all-product') -> with('product',$product);
        return view('admin') -> with('admin.ll-product',$manager_category);
        
    }
    
}
