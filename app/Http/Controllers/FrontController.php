<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

/**
 * TODO: Make a create method to display form for saving data into DB - DONE
 * TODO: Limit number of results that gets fetched from DB to display into index page - DONE
 * TODO: Connect FrontController to Music Model to fetch all songs in an album
 * TODO: Make validation rules for adding album covers with a minimum 1600x1600px and not exceeding 2000x2000px 
 */

class FrontController extends Controller
{
    public function index() 
    {
        $results = Music::inRandomOrder()->get();
        return view('front.index')->with('results', $results);
    }

    public function create()
    {
        return view('front.create');
    }

    public function show(string $id)
    {
        $results = Music::find($id);
        return view('front.show')->with('results', $results);
    }

    public function store(Request $request)
    {
         $validate = $request->validate([
            'artist_name' => 'required',
            'album_title' => 'required',
            'album_description' => 'required',
            'audio' => 'required'
         ]);

         if($request->hasFile('album_cover')) {
            $validate['album_cover'] = $request->file('album_cover')->store('album_covers', 'public');
        }

        if($request->hasFile('audio')) {
            $validate['audio'] = $request->file('audio')->store('audios', 'public');
        }
        
         Music::create($validate);
         return redirect('/');
    }
}
