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

        
        $mailData = array(
            'name' => $req->get('name'),
            'phone' => $req->get('phone'),
            'email' => $req->get('email'),
        );
        $mail = ['andrey.morozov99@mail.ru'];
        Mail::to($mail)->send(new mailsend($mailData));
        

        return redirect()->route('home')->with('message','Всё отправлено!');

    }
    
    /*public function store(ContactFormRequest $request)
    {
        \Mail::send('about.contact',
        array(
            'Fname' => $request->get('Fname'),
            'Lname' => $request->get('Lname'),
            'Email' => $request->get('Email'),
            'Phone' => $request->get('Phone'),
            'Order' => $request->get('Order')
        ), function($message)
    {
        $message->from('mohamedsasa201042@yahoo.com');
        $message->to('elbiheiry2@gmail.com', 'elbiheiry')->subject('TODOParrot Feedback');
    });

        return \Redirect::route('contact')
      ->with('message', 'Thanks for contacting us!');
    }
*/

/*public function sendForm(Request $request, CalcMailRequest $mailRequest)
    {
        $mailData = $request->all();
        // $mail = ['yshliu_lose@inbox.ru'];
        $mail = ['eliseev_denis_95@mail.ru'];
        Mail::to($mail)->send(new MailSend($mailData));*/

        /*Mail::send(new mailsend($mailData),array(
            'name' => $req->get('name'),
            'phone' => $req->get('phone'),
            'email' => $req->get('email'),
        ))*/
}
