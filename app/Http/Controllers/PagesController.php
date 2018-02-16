<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function volunteer(){
      return view('pages.volunteer');
    }
    public function vacancy(){
      return view('pages.vacancy');
    }
    public function contact(){
      return view('pages.contact');
    }

}
