<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{

    public function index()
    {
        return view('artist.index');
    }

    public function loginForm()
    {
        return view('artist.auth.login');
    }

    public function registerForm()
    {
        return view('artist.auth.register');
    }
}
