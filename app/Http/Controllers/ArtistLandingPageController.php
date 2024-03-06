<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Models\Albums;
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

    public function show(string $id)
    {   
        $results = [
            'profile' => ArtistProfileSettings::find($id),
            'albums' => Albums::find($id),
            'merch' => Merch::find($id)
        ];
        return view('artist.show')->with($results);
    }
}
