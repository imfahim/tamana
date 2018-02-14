<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CentreController extends Controller
{
    //
    public function autism()
    {
        return view('centre.autism');
    }
    public function specialeducation()
    {
        return view('centre.specialeducation');
    }
    public function skilldevelopment()
    {
        return view('centre.skilldevelopment');
    }
    public function kindergarten()
    {
      return view('centre.kindergarten');
    }
}
