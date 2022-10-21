<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $search_text = $_GET['search'];
        $bikes = Bike::where('brand', 'LIKE', '%'.$search_text.'%')->get();
//        dd($products);

        return view('search',
        compact('bikes'));
    }
}
