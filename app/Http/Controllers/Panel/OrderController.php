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
      $orders=DB::table('orders')
                  ->join('buyers','orders.buyer_id','=','buyers.id')
                  ->select('orders.*','buyers.*','orders.id as order_id')
                  ->orderBy('orders.id','DESC')
                  ->get();
      return view('panel.orders.index')->withOrders($orders);
    }
    public function show($id){
      $details=DB::table('order_details')
                  ->join('products','order_details.product_id','=','products.id')
                  ->select('products.*','order_details.*','order_details.quantity as order_quantity')
                  ->where('order_details.order_id',$id)
                  ->get();
      $status=DB::table('orders')
                  ->select('status','id')
                  ->where('id',$id)
                  ->first();
                  //dd($status);
      return view('panel.orders.details')->withDetails($details)
                                         ->withStatus($status);
    }
    public function delivery(Request $request){
      DB::table('orders')->where('id',$request->order_id)->update(['status'=>1]);
      $details=DB::table('order_details')
                  ->join('products','order_details.product_id','=','products.id')
                  ->select('products.*','order_details.*','order_details.quantity as order_quantity')
                  ->where('order_details.order_id',$request->order_id)
                  ->get();
      foreach($details as $detail){
        DB::table('products')->where('id',$detail->product_id)->decrement('quantity',$detail->order_quantity);
      }
      Session::flash('success', 'Delivery successfully made');
      return redirect()->route('orders.index');
    }
    public function cancel(Request $request){
      DB::table('orders')->where('id',$request->order_id)->update(['status'=>3]);
      $details=DB::table('order_details')
                  ->join('products','order_details.product_id','=','products.id')
                  ->select('products.*','order_details.*','order_details.quantity as order_quantity')
                  ->where('order_details.order_id',$request->order_id)
                  ->get();
      foreach($details as $detail){
        DB::table('products')->where('id',$detail->product_id)->increment('quantity',$detail->order_quantity);
      }
      Session::flash('success', 'Delivery successfully canceled');
      return redirect()->route('orders.index');
    }
}
