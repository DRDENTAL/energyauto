<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App\Mail/Reminder;

class HomeController extends Controller
{
    //
}
public function testMail()
{
	$email = 'javierelguetainacapino@gmail.com';
	Mail::to($mail)->send(new Reminder);
	dd('Correo enviado satisfactoriamente');
}