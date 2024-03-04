<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Profile;
use Illuminate\Http\Request;

class ArtistProfileController extends Controller
{

    public function index($id)
    {   
        $results = [
            'profile' => Profile::find($id),
            'artist' => Artist::find($id)
        ];
        return view('artist.profile.profile-settings')->with($results);
    }

    public function create()
    {
        return view('artist.profile.create');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
         ]);


        if($request->hasFile('profile_picture')) {
            $validate['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        if($request->hasFile('cover_photo')) {
            $validate['cover_photo'] = $request->file('cover_photo')->store('cover_photos', 'public');
        }
        
        
        Profile::create($validate);
        return redirect('/artist-profile');
    }

    public function updateProfile(Request $request, Profile $id)
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

    public function accountSettings(Request $request, Artist $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required']
        );

        $id->update($validate);
        return redirect('/artist-profile');
    }
}
