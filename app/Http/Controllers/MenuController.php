<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem as Item;

class MenuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function edit()
    {
        $items = Item::orderBy('position')->get();
        return view('menu.edit');
    }

    public function update(Request $request)
    {
        // code...
    }
}
