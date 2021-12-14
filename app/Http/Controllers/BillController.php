<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillController extends Controller
{
    public function show_bill_detail() {
        return view('admin.bill-detail');
    }
}
