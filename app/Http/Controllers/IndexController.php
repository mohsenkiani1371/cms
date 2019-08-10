<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;

class IndexController extends Controller
{
    public function main()
    {
        $header = Header::first() ?? new Header;
        // dd($header);
        return view('index', compact('header'));
    }
}
