<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Controller responsible for everything that goes within the Artist Panel
 */

class ArtistPanelController extends Controller
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
            'artists' => $findByForeignKey->albums,
            'merches' => $findByForeignKey->merches
        ];
        return view('artist.profile.dashboard')->with($results);
    }
    
    public function artistProfile()
    {   
        $foreignKey = Auth::guard('artists')->user()->id;
        $findByForeignKey = Artist::find($foreignKey);
        $results = [
            'profiles' => Profile::find($foreignKey),
            'albums' => $findByForeignKey->albums,
            'merches' =>    $findByForeignKey->merches
        ];
        return view('artist.index')->with($results);
    }
}
