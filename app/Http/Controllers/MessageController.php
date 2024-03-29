<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        $messages = Message::paginate(10);
        return view('messages.index', compact('messages'));
    }
    public function destroy(Message $message)
    {
        $message->delete();
        return back()->withMessage('پیام مورد نظر حذف شد.');
    }
}
