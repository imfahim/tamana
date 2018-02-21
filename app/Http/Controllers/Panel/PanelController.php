<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Session;

class PanelController extends Controller
{
    //
    public function index(){
      $categories=DB::table('categories')->get();
      return view('panel.index')->withCategories($categories);
    }
}
