<?php

namespace App\Http\Controllers;

use App\Models\Albums;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    

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
            'digital_audio_price' => 'required',
            'single_track_price' => 'required',
            'ship_from' => 'required',
            'ship_to' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'shipping_cost' => 'required',
            'shipping_currency' => 'required',
            'vat_country' => 'required',
            'vat_estimate' => 'required',
            'vat_currency' => 'required',
            'audios' => 'required|array',
            'merch_name' => 'required',
            'merch_price' => 'required',
            'merch_first_upload' => 'required',
            'merch_second_upload' => 'required',
            'merch_third_upload' => 'required',
            'merch_fourth_upload' => 'required'
         ]);

        $audios = [];
         
        foreach($validate['audios'] as $audio) {
            $path = $audio->getClientOriginalName();
            $audio_path =  $audio->storeAs('audios', $path, 'public');

            array_push($audios, $audio_path);
        }

        if($request->hasFile('merch_first_upload')) {
            $validate['merch_first_upload'] = $request->file('merch_first_upload')->store('merches', 'public');
        }

        if($request->hasFile('merch_second_upload')) {
            $validate['merch_second_upload'] = $request->file('merch_second_upload')->store('merches', 'public');
        }

        if($request->hasFile('merch_third_upload')) {
            $validate['merch_third_upload'] = $request->file('merch_third_upload')->store('merches', 'public');
        }

        if($request->hasFile('merch_fourth_upload')) {
            $validate['merch_fourth_upload'] = $request->file('merch_fourth_upload')->store('merches', 'public');
        }

        if($request->hasFile('album_cover')) {
            $validate['album_cover'] = $request->file('album_cover')->store('album_covers', 'public');
        }

        $validate['audios'] = $audios;
        
        Albums::create($validate);
        return redirect('/');

    }
}
