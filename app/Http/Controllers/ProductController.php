<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product() {
        return view('admin.add-product');
    }
    public function all_product() {
        return view('admin.all-product');
    }
}
