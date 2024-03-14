<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Models\Albums;
use App\Models\Artist;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ArtistProfileSettings;

/**
 * Controller responsible for everything that goes within the Artist Panel
 */

class ArtistPanelController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:artists', ['except' => ['show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        /**
         * Display all results in from the albums and merches table that belongs to
         * the currently signed in Artist in the Dashboard View
         */
        
        $foreignKey = Auth::guard('artists')->user()->id;
        $findByForeignKey = Artist::find($foreignKey);
        $results = [
            'artists' => $findByForeignKey->albums,
            'merches' => $findByForeignKey->merches
        ];
        return view('artist.index')->with($results);
    }

    public function create()
    {
        /**
         * Display the form for adding a new merch
         */

         return view('components.form.add-merch');
    }
    
    public function show(string $id)
    {   

        /**
         * Display the main Artist Profile page according to the guard
         */

        if(Auth::guard('artists')->user()->id ?? '')
        {
            $foreignKey = Auth::guard('artists')->user()->id;
            $findByForeignKey = Artist::find($foreignKey);
            $results = [
                'profile' => ArtistProfileSettings::find($foreignKey),
                'albums' => $findByForeignKey->albums,
                'merches' => $findByForeignKey->merches,
                'album_count' => $findByForeignKey->albums->count(),
                'merch_count' => $findByForeignKey->merches->count()
            ];

            return view('artist.show')->with($results);

        } else 
        
        {

            $foreignKey = Artist::find($id);
            $results = [
                'profiles' => ArtistProfileSettings::find($id),
                'albums' => $foreignKey->albums,
                'merch' =>$foreignKey->merches,
                'album_count' => $foreignKey->albums->count(),
                'merch_count' => $foreignKey->merches->count()
            ];

            return view('artist.show')->with($results);
        }
    }

    public function store(Request $request)
    {

        /**
         * 
         * Save the newly added merch
         */

        $validate = $request->validate([
            'email' => 'required',
            'ship_from' => 'required',
            'ship_to' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'shipping_cost' => 'required',
            'shipping_currency' => 'required',
            'vat_country' => 'required',
            'vat_estimate' => 'required',
            'vat_currency' => 'required',
            'merch_name' => 'required',
            'merch_price' => 'required',
            'merch_description' => 'required',
            'merch_first_upload' => 'required',
            'merch_second_upload' => 'required',
            'merch_third_upload' => 'required',
            'merch_fourth_upload' => 'required',
        ]);

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

        Merch::create($validate);
        return redirect('/artist-profile');
    }

    public function edit($id)
    {
        /**
         * Display the form for editing the merch details
         */

        $results = Merch::find($id);
        return view('artist.profile.panel.edit')->with('results', $results);
    }

    public function update(Request $request, Merch $id)
    {

        /**
         * Save the updated merch detaiils 
         */

        $validate = $request->validate([
            'email' => 'required',
            'ship_from' => 'required',
            'ship_to' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'shipping_cost' => 'required',
            'shipping_currency' => 'required',
            'vat_country' => 'required',
            'vat_estimate' => 'required',
            'vat_currency' => 'required',
            'merch_name' => 'required',
            'merch_price' => 'required',
            'merch_description' => 'required',
            'merch_first_upload' => ['required', 'dimensions:max_width=1000,max_height=1000'],
            'merch_second_upload' => ['required', 'dimensions:max_width=1000,max_height=1000'],
            'merch_third_upload' => ['required', 'dimensions:max_width=1000,max_height=1000'],
            'merch_fourth_upload' => ['required', 'dimensions:max_width=1000,max_height=1000'],
        ]);

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

        $id->update($validate);
        return redirect('/artist-profile');
    }

    public function destroy(string $id)
    {
        $album = Merch::find($id);
        $album->delete();

        return redirect('/artist-profile');
    }
}
