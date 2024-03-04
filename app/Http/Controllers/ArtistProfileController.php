<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistProfileController extends Controller
{

    public function index()
    {
        return view('artist.profile.profile-settings');
    }

    public function updateProfile(Request $request, Artist $id)
    {
        $validate = $request->validate([
            'name' => 'required',
        ]);

        $id->update($validate);
        return redirect('/artist-profile');
    }
}
