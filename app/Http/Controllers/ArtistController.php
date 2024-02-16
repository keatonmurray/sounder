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
        $user_id = Auth::guard('artists')->user()->id;
        $user = Artist::find($user_id);
        $results = [
            'artists' => $user->albums,
            'merches' => $user->merches
        ];
        return view('artist.index')->with($results);
    }
}
