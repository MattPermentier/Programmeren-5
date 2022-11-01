<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        if (auth()->user()->role == 1) {
            echo 'admin';

        $bikes = Bike::all();

        return view('adminPanel',
        compact('bikes'));
        } else {
            abort(403);
        }

    }


}
