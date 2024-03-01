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
        $foreignKey = Auth::guard('artists')->user()->id;
        $findByForeignKey = Artist::find($foreignKey);
        $results = [
            'artists' =>    $findByForeignKey->albums,
            'merches' =>    $findByForeignKey->merches
        ];
        return view('artist.profile.dashboard')->with($results);
    }
    
    public function artistProfile()
    {   
        $foreignKey = Auth::guard('artists')->user()->id;
        $findByForeignKey = Artist::find($foreignKey);
        $results = [
            'artists' => Artist::find($foreignKey),
            'albums' => $findByForeignKey->albums,
            'merches' =>    $findByForeignKey->merches
        ];
        return view('artist.index')->with($results);
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
