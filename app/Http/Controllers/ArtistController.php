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


    public function index()
    {
        $user_id = auth()->user()->id;
        $user = Artist::find($user_id);
        return view('artist.index')->with('artists', $user->artists);
    }
}
