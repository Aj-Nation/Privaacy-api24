<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMember;

class SendEmailController extends Controller
{
    //
    function index()
    {
        
        Mail::to('banashreebisalahalli@gmail.com')->send(new WelcomeMember());
        return view('welcome'); 
    }
}
