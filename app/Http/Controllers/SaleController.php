<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function add_sale() {
        return view('admin.add-sale');
    }
    public function all_sale() {
        return view('admin.all-sale');
    }
}
