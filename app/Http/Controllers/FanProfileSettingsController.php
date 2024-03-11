<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FanProfileSettings;

class FanProfileSettingsController extends Controller
{

    public function store(Request $request)
    {
        $validate = $request->validate([
            'profile_picture' => 'required',
            'cover_photo' => 'required',
            'email' => 'required'
        ]);

        if($request->hasFile('profile_picture')) {
            $validate['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        if($request->hasFile('cover_photo')) {
            $validate['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }

        FanProfileSettings::create($validate);
        return redirect('/dashboard');

    }
    public function edit($id)
    {
        /**
         * Display the form for changing artist profile photo and background image
         */

         $profile = FanProfileSettings::find($id);
         return view('fan.profile.profile-settings')->with('profile', $profile);
    }

    public function update(Request $request, FanProfileSettings $id)
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

}
