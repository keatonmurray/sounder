<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Models\Albums;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() 
    {
        $data = [
            'results' => Albums::inRandomOrder()->limit(12)->get(),
            'merches' => Merch::inRandomOrder()->limit(12)->get()
        ];
        return view('front.index')->with($data);
    }

    public function create()
    {
        return view('front.create');
    }

    public function show(string $id)
    {
        $results = [
            'results' => Albums::find($id),
            'merch' => Merch::find($id)
        ];
        return view('front.show')->with($results);
    }

    public function store(Request $request)
    {
         $validate = $request->validate([
            'artist_name' => 'required',
            'album_title' => 'required',
            'album_description' => 'required',
            'genre' => 'required',
            'tags' => 'required',
            'album_cover' => 'required',
            'digital_audio_price' => 'required',
            'single_track_price' => 'required',
            'play_limit' => 'required',
            'audios' => 'required|array', 
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

        $validate['audios'] = $audios;
        
        Albums::create($validate);
        return redirect('/artist');
    }
}
