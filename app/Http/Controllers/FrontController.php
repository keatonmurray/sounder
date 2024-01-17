<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;

/**
 * TODO: Make a create method to display form for saving data into DB
 */

class FrontController extends Controller
{
    public function index() 
    {
        $results = Music::all();
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

    public function store(Request $request): RedirectResponse
    {
        /**
         * Validate form values
         * Save form values
         */

         $validate = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required'
         ]);

    }
}
