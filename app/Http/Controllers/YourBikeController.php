<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Auth;
use Illuminate\Http\Request;

class YourBikeController extends Controller
{

    public function yourBikes()
    {
        $yourBikes = Bike::where("user_id", Auth::user()->id)->get();

        return view('yourBikes',
        compact('yourBikes'));
    }
}
