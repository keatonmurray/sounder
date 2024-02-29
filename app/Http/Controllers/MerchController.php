<?php

namespace App\Http\Controllers;

use App\Models\Merch;
use Illuminate\Http\Request;

class MerchController extends Controller
{

    public function saveMerch(Request $request)
    {
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

    public function editMerch($id)
    {   
        $results = Merch::find($id);
        return view('artist.profile.panel.edit')->with('results', $results);
    }

    public function updateMerch()
    {
        
    }
}
