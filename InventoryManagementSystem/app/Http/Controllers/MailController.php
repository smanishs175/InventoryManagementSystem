<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    public function index(){
        Mail::to('')->send(new Mailtrap());
    }
}
