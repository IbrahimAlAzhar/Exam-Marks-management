<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DynamicPDFController extends Controller
{
    function index()
    {
      $customer_data = $this->get_customer_data();
      return view('dynamic_pdf')->with('customer_data',$customer_data);
    }
    function get_customer_data()
    {
      $customer_data = DB::table('students')
                     ->limit(10)
                     ->get();
      return $customer_data;
    }
}
