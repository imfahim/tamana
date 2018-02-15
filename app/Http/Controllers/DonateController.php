<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function page_donate()
    {
        return view('donate.donate');
    }
}
