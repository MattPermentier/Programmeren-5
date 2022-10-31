<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        $bikes = Bike::all();

        return view('adminPanel',
        compact('bikes'));
    }


}
