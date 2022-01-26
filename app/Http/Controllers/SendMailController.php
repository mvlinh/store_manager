<?php

namespace App\Http\Controllers;

use App\Mail\transferMail;
use Illuminate\Http\Request;
use App\Models\employee;
use Illuminate\Support\Facades\Mail;
class SendMailController extends Controller
{
    public function sendMail($user){
        $mailable = new transferMail($user);
        Mail::to($user->email)->send($mailable);
        return true;
    }
}
