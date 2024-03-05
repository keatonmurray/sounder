<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use App\Models\Artist;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('auth:artists');
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
         * the currently signed in Artist
         */
        $foreignKey = Auth::guard('artists')->user()->id;
        $findByForeignKey = Artist::find($foreignKey);
        $results = [
            'artists' => $findByForeignKey->albums,
            'merches' => $findByForeignKey->merches
        ];
        return view('artist.profile.dashboard')->with($results);
    }

    public function create()
    {
        /**
         * Display the form for adding a new merch
         */

         return view('components.form.add-merch');
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

    public function destroy()
    {
        
    }
}
