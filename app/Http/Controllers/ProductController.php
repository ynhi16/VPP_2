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
        return view('admin.add-product');
    }
    public function all_product() {
        return view('admin.all-product');
        
    }

}
