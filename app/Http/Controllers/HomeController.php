<?php

namespace App\Http\Controllers;

use App\Models\Fan;
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
    public function index()
    {
        if(Auth::guard('web')->user()->id ?? '')
        {
            $foreignKey = Auth::guard('web')->user()->id;
            $findByForeignKey = Fan::find($foreignKey);
            $results = [
                'albums' => $findByForeignKey->albums,
                'merches' =>    $findByForeignKey->merches,
            ];

            return view('fan.index')->with($results);

        } else 
        
        {
            
            $results = [
                'albums' => Collections::all()
            ];

            return view('fan.index')->with($results);
        }
    }
}
