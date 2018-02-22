<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

class OrderController extends Controller
{
    //
    public function index(){
      $orders=DB::table('orders')->join('buyers','orders.buyer_id','=','buyers.id')->get();
      return view('panel.orders.index')->withOrders($orders);
    }
}
