<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

use App\Product;

class ShopController extends Controller
{
    public function index()
    {
      $categories=DB::table('categories')->orderBy('name','ASC')->get();
      $products = DB::table('products')->orderBy('id','DESC')->get();
        return view('shop.index')->withCategories($categories)->withProducts($products);
    }

    public function filter($id){
      $categories=DB::table('categories')->orderBy('name','ASC')->get();
      $products = DB::table('products')->orderBy('id','DESC')->where('category_id',$id)->get();
        return view('shop.index')->withCategories($categories)->withProducts($products);
    }

    public function cart()
    {
      return view('shop.cart');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('shop.details')->with('product', $product);
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
        //
    }
}
