<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    public function add_category_product() {
        return view('admin.add-category');
    }
    public function all_category_product() {
        return view('admin.all-category');
    }
}
