<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

use App\Product;
use App\Category;
use App\RelCatProd;

use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all(['id', 'name', 'quantity', 'price', 'status']);
        return view('panel.products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all(['id', 'name']);
        return view('panel.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'name' => 'required',
          'category_id' => 'required',
          'quantity' => 'required',
          'price' => 'required',
          'file1' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:3000',
          'file2' =>'image|mimes:jpeg,png,jpg,gif,svg|max:3000',
          'file3' =>'image|mimes:jpeg,png,jpg,gif,svg|max:3000',
        ]);

        // Product Table Filling Up
        $product = new Product;

        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->tags = $request->tags;

        $product->save();
        $id=Product::orderBy('id','desc')->first();
        Session::flash('success', 'Product has been added successfully !');
          File::makeDirectory(public_path()."\/images\/products\/".$id."\/",0777, true, true);

      //  $imageName1=time().'.'.$request->file1->getClientOriginalExtension();
      //  $request->file1->move(public_path("images/products".$id."/"),$imageName1);

        return redirect()->route('products.index');
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
        $product = Product::with('category')->find($id);
        $categories = Category::all(['id', 'name']);
        return view('panel.products.edit')->with('categories', $categories)->with('product', $product);
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
        $this->validate($request,[
          'name' => 'required',
          'category_id' => 'required',
          'quantity' => 'required',
          'price' => 'required'
        ]);

        // Product Table Filling Up
        $product = Product::find($id);

        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->tags = $request->tags;

        $product->save();

        Session::flash('success', 'Product has been edited successfully !');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $product = Product::find($request->id);

      $product->delete();

      Session::flash('success', 'Product has been deleted successfully !');
      return redirect()->route('products.index');
    }
}
