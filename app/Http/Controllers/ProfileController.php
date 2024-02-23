<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateProfile(Request $request, Artist $id)
    {
        $validate = $request->validate([
            'artist_name' => 'required']
        );

        $id->update($validate);
        return back()->with('message', 'Profile Updated Successfully');
    }
}
