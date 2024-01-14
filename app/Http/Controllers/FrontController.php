<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() 
    {
        $results = Music::all();
        return view('front.index')->with('results', $results);
    }
}
