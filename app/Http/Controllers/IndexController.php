<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Footer;

class IndexController extends Controller
{
    public function main()
    {
        $header = Header::first() ?? new Header;
        $footer = Footer::first() ?? new Footer;
        return view('index', compact('header', 'footer'));
    }
}
