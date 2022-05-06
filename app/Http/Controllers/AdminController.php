<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

session_start();

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function show_dashboard()
    {
        $product = DB::table('sanpham')
            ->select(DB::raw('count(*) as tong'))->get();
        //  echo '<pre>';
        //  echo($product);
        //     echo '</pre>';
        //     exit;
        $order = DB::table('hoadon')
            ->select(DB::raw('count(*) as tong'))
            ->where('trangThai', 'Đã xác nhận')->get();
        $user = DB::table('nguoidung')
            ->select(DB::raw('count(*) as tong'))
            ->get();
        $date = DB::table('hoadon')
            ->select(DB::raw('count(*) as tong'))
            ->where('trangThai', 'Đã xác nhận' and 'ngayLap','NOW()')->get();
        $manager_category = view('admin.dashboard')->with('product', $product)->with('order', $order)->with('user', $user)->with('date', $date);
        return view('admin')->with('admin.dashboard', $manager_category);
    }
}
