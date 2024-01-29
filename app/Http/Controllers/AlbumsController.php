<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index() 
    {
        $albums = Music::all();
        return view('front.partials.albums')->with('albums', $albums);
    }
}
