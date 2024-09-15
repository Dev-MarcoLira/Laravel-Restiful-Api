<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class MailController extends Controller
{
    public function sendEmail()
    {
        $data = "Fala meu amigo";

        Mail::to("malirab2302@gmail.com")->send(new TestMail($data));

        //return 'Email sent!';
    }
}
