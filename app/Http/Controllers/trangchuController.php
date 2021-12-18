<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trangchuController extends Controller
{
    public function index() {
        return view('page.trangchu');
    }
    public function dangnhap() {
        return view('dangnhap');
    }
    public function dangky() {
        return view('dangky');
    }
}
