<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function ApnaFunClub(){
      return view('services.apna-fun-club');
    }

    public function nios(){
      return view('services.nios');
    }

    public function boys_hostel(){
      return view('services.boys-hostel');
    }
}
