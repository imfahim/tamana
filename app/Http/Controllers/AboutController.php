<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function page_board_members()
    {
      return view('about.board-members');
    }
}
