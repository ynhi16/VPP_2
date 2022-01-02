<?php

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

session_start();

$rowId = $data['rowid'];
$sl = $data['sl'];
Cart::update($rowId, $sl);
print_r($data);
