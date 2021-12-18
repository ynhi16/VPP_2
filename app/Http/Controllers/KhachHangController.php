<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class KhachHangController extends Controller
{
    //
    public function index() {
        return view('khachhangHome');
    }
    //dang nhap
    public function login(Request $request) {
        return Redirect::to('/khachhang');
    }
    public function giohang() {
        return view('khachhang.giohang');
    }
    public function canhan() {
        return view('khachhang.canhan');
    }
    public function matkhau() {
        return view('khachhang.doimatkhau');
    }
}

