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
        $account = DB::table('nguoidung')-> get();
        $manager_category = view('admin.account') -> with('account',$account);
        return view('admin') -> with('admin.account',$manager_category);
        
    }
    
}
