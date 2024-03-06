<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use App\Models\ArtistProfileSettings;

class ArtistProfileSettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:artists');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'profile_picture' => 'required',
            'cover_photo' => 'required'
        ]);

        if($request->hasFile('profile_picture')) {
            $validate['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        if($request->hasFile('cover_photo')) {
            $validate['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }

        ArtistProfileSettings::create($validate);
         return redirect('/artist-profile');

    }
   
    public function edit($id)
    {
        /**
         * Display the form for changing artist profile photo and background image
         */

        $profile = ArtistProfileSettings::find($id);
        return view('artist.profile.profile-settings')->with('profile', $profile);
    }

    public function update(Request $request, ArtistProfileSettings $id)
    {
        
        if($request->hasFile('profile_picture')) {
            $validate['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        if($request->hasFile('cover_photo')) {
            $validate['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }

         $id->update($validate);
         return redirect('/artist-profile');

    }

    public function destroy()
    {

    }
}
