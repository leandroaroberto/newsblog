<?php

namespace crossover\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use crossover\Mail\contactForm;


class mailController extends Controller
{
    public function index(){
        
      $data['title'] = "We would love to hear you...";
      return view('contact',$data);
    }

    public function sendMail(Request $request){

        $dados[] = $request->input('subject');
        $dados[] = $request->input('message');

        Mail::to('leroberto@gmail.com')->send(new contactForm($dados));

        return redirect('contact');
    }

}
