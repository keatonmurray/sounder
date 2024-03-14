<?php

namespace App\Http\Controllers;

use App\Models\Fan;
use App\Models\Wishlists;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'item' => 'required'
        ]);

        Wishlists::create($validate);
        return redirect('/dashboard');
    }
}
