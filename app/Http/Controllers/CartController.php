<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $this->status();
        return view('Shop.cart')->with('cartItems', Cart::content());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
          'qty' => 1
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

    private function status()
    {
      $total = Cart::total();
      $subtotal = Cart::subtotal();
      $count = Cart::count();
      Session::put('order.total', $total);
      Session::put('order.subtotal', $subtotal);
      Session::put('order.count', $count);
    }
}
