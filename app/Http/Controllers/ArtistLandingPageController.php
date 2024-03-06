<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtistProfileSettings;

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
            'profile' => ArtistProfileSettings::find($foreignKey),
            'albums' => $findByForeignKey->albums,
            'merches' =>    $findByForeignKey->merches
        ];
        return view('artist.index')->with($results);
    }
}
