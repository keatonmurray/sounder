<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function artistLoginForm ()
    {
        return view('artist.auth.login');
    }

    public function artistSignupForm()
    {
        return view('artist.auth.register');
    }

    public function fanLoginForm()
    {
        return view('fan.auth.login');
    }

    public function fanSignupForm()
    {
        return view('fan.auth.register');
    }

    public function registerLinks()
    {
        return view('fan.auth.registration');
    }

    public function addMerchForm() 
    {
        return view('components.form.add-merch');
    }
}
