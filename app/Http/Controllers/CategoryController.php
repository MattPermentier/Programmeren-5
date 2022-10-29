<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CategoryController extends Controller
{
    public function allRoad(Request $request)
    {
        // check which category btn is clicked and get all the bikes with that category
        $clickedCategory = $request->input('category');
        $category = Bike::where('category', $clickedCategory)->get();

        return view('category',
            compact('category'));
    }
}
