<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistProfileController extends Controller
{

    public function index($id)
    {   
        $results = Artist::find($id);
        return view('artist.profile.profile-settings')->with('results', $results);
    }

    public function create()
    {
        return view('artist.profile.create');
    }

    public function updateProfile(Request $request, Artist $id)
    {
        $validate = $request->validate([
            'name' => 'required',
        ]);

        if($request->hasFile('cover_photo')) {
            $validate['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        if($request->hasFile('cover_photo')) {
            $validate['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }

        $id->update($validate);
        return redirect('/artist-profile');
    }
}
