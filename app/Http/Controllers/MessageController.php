<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();

        return view('pages.index', ['messages' => $messages]);
    }

    public function create() {
        return view('pages.create');
    }

    public function store(Request $request) {
        $message = new Message();

        $message->firstname = $request->fname;
        $message->lastname = $request->lname;
        $message->phone = $request->phone;
        $message->email = $request->email;
        $message->message = $request->msg;

        $message->save();
        return redirect('/message');
    }
}
