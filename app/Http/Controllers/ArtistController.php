<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:artists');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $user_id = Auth::guard('artists')->user()->id;
        $user = Artist::find($user_id);
        $results = [
            'artists' => $user->albums,
            'merches' => $user->merches
        ];
        return view('artist.profile.dashboard')->with($results);
    }
    
    public function artistDashboard()
    {
        return view('artist.profile.dashboard');
    }

    public function artistProfileSettings()
    {
        return view('artist.profile.profile-settings');
    }

    public function updateProfile(Request $request, Artist $id)
    {
        $validate = $request->validate([
            'name' => 'required',
        ]);

        $id->update($validate);
        return redirect('/artist');
    }
}
