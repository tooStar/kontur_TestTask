<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\homerequest;
use App\Mail\mailsend;
use App\Models\tests;
use Illuminate\Support\Facades\Mail;

class homecontroller extends Controller {

    public function submit(homerequest $req){

        $home = new tests();
        $home->name = $req->input('name');
        $home->phone = $req->input('phone');
        $home->email = $req->input('email');

        $home->save();

        $mailData = [
            'name' => $req->input('name'),
            'phone' => $req->input('phone'),
            'email' => $req->input('email')
        ];

        Mail::send(new mailsend($mailData));

        return redirect()->route('home')->with('message','Всё отправлено!');

    }
}
