<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuItem as Item;
use App\Section;

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
        if (count($items)==0) {
            $items[] = new Item;
        }
        $sections = Section::orderBy('position')->get();
        if (count($sections)==0) {
            $sections[] = new Section;
        }
        return view('menu.edit', compact('items', 'sections'));
    }

    public function update(Request $request)
    {
        Item::truncate();
        for ($i=0; $i < count($request->position); $i++) {
            $data = [];
            $data['position'] = $request->position[$i];
            $data['name'] = $request->name[$i];
            $data['icon'] = $request->icon[$i];
            $data['link'] = $request->internal_link[$i] ?? $request->external_link[$i];
            Item::create($data);
        }
        return back()->withMessage('منو ویرایش شد.');
    }
}
