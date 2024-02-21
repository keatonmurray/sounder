<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileSettings()
    {
        return view('artist.profile.profile-settings');
    }
}
