<?php

namespace App\Http\Controllers;

use App\Models\Fan;
use App\Models\Collections;
use Illuminate\Http\Request;
use App\Models\FanProfileSettings;
use Illuminate\Support\Facades\Auth;

/**
 * Controller responsible for anything that goes within the Fan Panel 
 */

class FanPanelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(string $id)
    {
        /**
         * Display the main Artist Profile page according to the guard
         */

         if(Auth::guard('web')->user()->id ?? '')
         {
             $foreignKey = Auth::guard('web')->user()->id;
             $findByForeignKey = Fan::find($foreignKey);
             $results = [
                 'profile' => FanProfileSettings::find($foreignKey),
                 'albums' => $findByForeignKey->albums,
                 'merches' => $findByForeignKey->merches,
             ];
 
             return view('fan.index')->with($results);
 
         } else 
         
         {
 
             $foreignKey = Fan::find($id);
             $results = [
                 'profiles' => FanProfileSettings::find($id),
                 'albums' => $foreignKey->albums,
                 'merch' =>$foreignKey->merches
             ];
 
             return view('fan.index')->with($results);
         }
    }
}
