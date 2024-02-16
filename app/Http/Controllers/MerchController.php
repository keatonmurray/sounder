<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MerchController extends Controller
{
    public function addMerch()
    {
        return view('components.form.add-merch');
    }

    public function saveMerch()
    {
        echo "Saved!";
    }
}
