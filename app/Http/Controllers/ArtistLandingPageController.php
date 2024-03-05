<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistLandingPageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:artists');
    }

    public function index()
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
