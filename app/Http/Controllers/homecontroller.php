<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeRequest;
use App\Mail\MailSend;
use App\Models\tests;
use Illuminate\Support\Facades\Mail;

class homecontroller extends Controller {

    public function submit(HomeRequest $req){

        $home = new tests();
        $home->name = $req->input('name');
        $home->phone = $req->input('phone');
        $home->email = $req->input('email');

        $home->save();

        Mail::send(new mailsend($home));

        return response()->json(['success'=>true]);
        //return redirect()->route('home');

    }
}
