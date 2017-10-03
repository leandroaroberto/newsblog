<?php

namespace crossover\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use crossover\Mail\contactForm;


class mailController extends Controller
{
    //

    public function index(){
      //return "Sending you e-mail in five seconds!";
      $data['title'] = "We would love to hear you...";
      return view('contact',$data);
    }

    public function sendMail(Request $request){

        $data = array(
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        );

        Mail::to('leroberto@gmail.com')->send(new contactForm());


        /*Mail::send(['mail.contact'], $data, function($message)
        {
            //$message->from('contact@news.crossover.com', 'Cross Over News');
            $message->to('leroberto@gmail.com')->cc('leandro@leandroroberto.com.br');
        });*/




        return redirect('contact');

    }

}
