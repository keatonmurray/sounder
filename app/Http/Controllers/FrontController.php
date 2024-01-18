<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

/**
 * TODO: Make a create method to display form for saving data into DB - DONE
 * TODO: Limit number of results that gets fetched from DB to display into index page
 */

class FrontController extends Controller
{
    public function index() 
    {
        $results = Music::all();
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
        /**
         * Validate form values - DONE
         * Save form values - DONE
         */

         $validate = $request->validate([
            'artist_name' => 'required',
            'album_title' => 'required',
            'album_description' => 'required',
         ]);

         if($request->hasFile('album_cover')) {
            $validate['album_cover'] = $request->file('album_cover')->store('album_covers', 'public');
        }
        
         Music::Create($validate);
         return redirect('/');

    }
}
