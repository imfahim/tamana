<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CenterController extends Controller
{
    //
    public function autism()
    {
        return view('center.autism');
    }
    public function specialeducation()
    {
        return view('center.specialeducation');
    }
}
