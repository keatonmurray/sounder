<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtistController extends Controller
{

    public function index()
    {
        /*
        $user_id = Auth::guard('artists')->user()->id;
        $user = Artist::find($user_id);
        return view('artist.index')->with('music', $user->artists);
        */
        return view('artist.index');
    }
}
