<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   public function home()
   {
       return view('maine');

//    foreach (\App\Order::all() as $order) {
//        echo $order->product_area;
//        echo '<br>';
//  }
   }

    public function timesheet()
    {
        return view('timesheet');
    }
}
