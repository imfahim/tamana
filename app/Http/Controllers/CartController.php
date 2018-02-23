<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;
use Cart;

use App\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Cart::destroy();
        $this->status();
        //dd(Cart::content());
        return view('Shop.cart')->with('cartItems', Cart::content());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function checkout(){
    //   dd(Cart::content());
       return view ('Shop.checkout')->withCartitems(Cart::content());
     }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::find($request->product_id);

        Cart::add([
          'id' => $product->id,
          'name' => $product->name,
          'price' => $product->price,
          'qty' => 1,
          'options' => ['quantity' => $product->quantity]
        ])->associate('Product');

        $this->status();
        Session::flash('success', 'Successfully Generated The Cart');
        return redirect()->route('Shop.cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rowId = Cart::content()->where('id', $id)->first()->rowId;
        Cart::remove($rowId);

        //$orderRequests = Session::get('order.request');
        //Session::forget($id);

        $this->status();
        Session::flash('success', 'Successfully Deleted The Item');
        return redirect()->route('Shop.cart');
    }
    public function confirm(Request $request){
      $buyerid=DB::table('buyers')->insertGetId([
        'fullname'=> $request->fname." ".$request->lname,
        'company'=> $request->company,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address.",".$request->city.",".$request->state.",".$request->postcode,
        'country'=>$request->country
      ]);

      $orderid=DB::table('orders')->insertGetId([
        'code'=>rand(1000,10000000),
        'buyer_id'=>$buyerid,
        'total'=>Session::get('order.total')
      ]);
      foreach(Cart::content() as $product){
        DB::table('order_details')->insert([
            'order_id'=>$orderid,
            'product_id'=>$product->id,
            'quantity'=>$product->qty,
            'paid_by_option'=>"Cash On Delivery",
            'total'=>$product->subtotal()
        ]);
      }

      Cart::destroy();

      Session::forget('order');
      $this->status();
      Session::flash('success', 'Order Placed Successfully !');

      return redirect()->route('Shop.Index');

    }

    private function status()
    {
      $total = Cart::total()-Cart::tax();
      $subtotal = Cart::subtotal();
      $count = Cart::count();
      Session::put('order.total', $total);
      Session::put('order.subtotal', $subtotal);
      Session::put('order.count', $count);
    }
}
