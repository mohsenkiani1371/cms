<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Footer;
use App\Message;
use App\Section;
use App\MenuItem;

class IndexController extends Controller
{
    public function main()
    {
        $header = Header::first() ?? new Header;
        $footer = Footer::first() ?? new Footer;
        $menu_items = MenuItem::orderBy('position')->get();
        $sections = Section::where('visible', 1)->orderBy('position')->get();
        return view('index', compact('header', 'footer', 'sections', 'menu_items'));
    }
    public function store_message(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'subject' => 'nullable|string|max:191',
            'body' => 'required|string|max:1000',
        ]);
        Message::create($data);
        $result['success'] = true;
        $result['message'] = "پیام شما با موفقیت ثبت شد.";
        return $result;
    }
}
