<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class AddNewBikeController extends Controller
{
    public function show()
    {
        return view('addNewBike');
    }

    public function add(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $query = DB::table('bikes')->insert([
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'category' => $request->input('category'),
            'description' => $request->input('description'),
            'image' => $request->input('image')
        ]);

        if ($query) {
            return back()->with('success', 'Data have been successfully inserted');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}
