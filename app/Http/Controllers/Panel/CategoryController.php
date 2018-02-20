<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
}
