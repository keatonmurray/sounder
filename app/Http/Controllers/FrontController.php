<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    
    public function __construct()
    {
        $this->middleware(['auth'], ['except' => ['index', 'show']]);
    }
    

    public function index() 
    {
        $results = Albums::inRandomOrder()->limit(12)->get();
        return view('front.index')->with('results', $results);
    }

    public function create()
    {
        return view('front.create');
    }

    public function show(string $id)
    {
        $results = Albums::find($id);
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
            'merch' => 'required',
            'merch_name' => 'required',
            'merch_price' => 'required',
            'digital_track_price' => 'required',
            'highlight_track' => 'required',
            'merch_description' => 'required'
         ]);

        $audios = [];
         
        foreach($validate['audios'] as $audio) {
            $path = $audio->getClientOriginalName();
            $audio_path =  $audio->storeAs('audios', $path, 'public');

            array_push($audios, $audio_path);
        }

        if($request->hasFile('merch')) {
            $validate['merch'] = $request->file('merch')->store('merches', 'public');
        }

        if($request->hasFile('highlight_track')) {
            $path = $validate['highlight_track']->getClientOriginalName();
            $validate['highlight_track'] = $request->file('highlight_track')->storeAs('highlight_tracks', $path, 'public');
        }

        if($request->hasFile('album_cover')) {
            $validate['album_cover'] = $request->file('album_cover')->store('album_covers', 'public');
        }

        $validate['audios'] = $audios;
        
         Albums::create($validate);
         return redirect('/');
    }
}
