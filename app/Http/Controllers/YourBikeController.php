<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Auth;
use Illuminate\Http\Request;

class YourBikeController extends Controller
{

    public function yourBikes()
    {
//        get bikes where user_id is equal to logged in user
        $yourBikes = Bike::where("user_id", Auth::user()->id)->get();

        return view('yourBikes',
        compact('yourBikes'));
    }
}
