<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

session_start();
class AccountProduct extends Controller
{
    // public function show_account() {
    //     return view('admin.account');
    // }
    public function show_account() {
        $account = DB::table('nguoidung')
            ->get();
            // echo '<pre>';
            // print_r($account);
            // echo '</pre>';
            // foreach($account as $key => $account) {
            //     $maPX = $account -> maPX;
            //     $maQuyen = $account -> maQuyen;
            //     $maPX = DB::table('phuongxa')->where('IDPX',$maPX)->get();
            //     $maQuyen = DB::table('phanquyen')->where('maQuyen',$maQuyen)->get();
                
            // //     echo '<pre>';
            // // print_r($maPX);
            // // echo '</pre>';
            // // echo '<pre>';
            // // print_r($maQuyen);
            // // echo '</pre>';
            // }
            //exit;
        $manager_category = view('admin.account') -> with('account',$account);
        // -> with('maPX',$maPX)-> with('maQuyen',$maQuyen)
        return view('admin') -> with('admin.account',$manager_category);
        
    }
    public function update_account(Request $request, $maND)
    {
        $data = array();
        $data['trangThai'] = '0';
        DB::table('nguoidung')->where('maND',$maND)->update($data);
        return Redirect::to('account');
    }
    public function update_account_open(Request $request, $maND)
    {
        $data = array();
        $data['trangThai'] = '1';
        DB::table('nguoidung')->where('maND',$maND)->update($data);
        return Redirect::to('account');
    }
    
}
