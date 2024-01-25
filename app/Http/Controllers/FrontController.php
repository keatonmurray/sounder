<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

/**
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
            'price' => 'required',
            'audios' => 'required|array',
            'merch' => 'required'
         ]);

        $audios = [];
         
        foreach($validate['audios'] as $audio) {
            $path = $audio->getClientOriginalName();
            $audio_path =  $audio->storeAs('audios', $path, 'public');

            array_push($audios, $audio_path);
        }

        if($request->hasFile('album_cover')) {
            $validate['album_cover'] = $request->file('album_cover')->store('album_covers', 'public');
        }
        

        if($request->hasFile('bg_img')) {
            $validate['bg_img'] = $request->file('bg_img')->store('bg_images', 'public');
        }

        $validate['audios'] = $audios;
        
         Music::create($validate);
         return redirect('/');
    }
}
