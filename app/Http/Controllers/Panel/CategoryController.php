<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;
use App\Category;

class CategoryController extends Controller
{
    //
    public function index(){
      $category=DB::table('categories')->get();
      return view ('panel.categories.index')->withCategories($category);
    }
    public function create(){
      return view ('panel.categories.create');
    }
    public function edit($id){
      $category=Category::find($id);
      return view ('panel.categories.edit')->withCategory($category);
    }
    public function store(Request $request){
      $this->validate($request,[
        'name' => 'required',
        ]);
        $flag = DB::table('categories')->insert(['name'=>$request->input('name')]);
        if($flag){
          $request->session()->flash('success', 'Category Create Successful');
        }
        else{
            $request->session()->flash('fail', 'Failed to Store');
        }
        return redirect()->route('panel.category.index');
    }
    public function delete(Request $request){
      $flag =DB::table('categories')->where('id',$request->input('id'))->delete();
      if($flag){
        $request->session()->flash('success', 'Successfully Deleted');
      }
      else{
          $request->session()->flash('fail', 'Failed to Delete');
      }
      return redirect()->route('panel.category.index');

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'name' => 'required',
        ]);

        // Product Table Filling Up
        $category = Category::find($id);

        $category->name = $request->name;


        $category->save();

        Session::flash('success', 'Product has been edited successfully !');
        return redirect()->route('panel.category.index');
    }
}
