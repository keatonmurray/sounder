<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

/**
 * TODO: Make validation rules for adding album covers with a minimum 1600x1600px and not exceeding 2000x2000px
 * TODO: Make the file upload input fields capable of storing multiple files in the table from store method
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
            'price' => 'required',
            'audio' => 'required'
         ]);

        if($request->hasFile('album_cover')) {
            $validate['album_cover'] = $request->file('album_cover')->store('album_covers', 'public');
        }

        if($request->hasFile('audio')) {
            $validate['audio'] = $request->file('audio')->store('audios', 'public');
        }

        if($request->hasFile('bg_img')) {
            $validate['bg_img'] = $request->file('bg_img')->store('bg_images', 'public');
        }
        
         Music::create($validate);
         return redirect('/');
    }
}
