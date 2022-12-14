<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BikeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $headTitle = 'Motoren';

//        get the text from the searchbar
        $search_text = $request->input('search');

//        check if search text belongs to table in DB
        if ($search_text) {
            $bikes = Bike::where('brand', 'LIKE', '%' . $search_text . '%')
                ->orWhere('model', 'LIKE', '%' . $search_text . '%')
                ->orWhere('category', 'LIKE', '%' . $search_text . '%')
                ->orWhere('description', 'LIKE', '%' . $search_text . '%')
                ->get();
        } else {
            $bikes = Bike::where('is_active', 0)->get();
        }

        $user = Auth::user();

//        get the number of posts a user has made
        $numPosts = $user->posts()->count();

        return view('bikes',
            compact('bikes', 'numPosts', 'headTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headTitle = 'Add New Bike';
        return view('addNewBike',
            compact('headTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        // save input in DB with user id based on logged in user
        Bike::create($request->all() + ['user_id' => auth()->id()] + ['is_active']);
        return redirect(route('bikes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $headTitle = 'Details';
        $bike = Bike::find($id);

        return view('bike',
            compact('headTitle',
                'bike'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $headTitle = 'Edit Bike';
        $bike = Bike::find($id);

        return view('edit',
            compact('bike',
                'headTitle'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // check the input fields and update the info of the bike based on which bike is clicked
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        $bike = Bike::find($id);
        $bike->update($request->all());
        $bike->save();

        return redirect(route('bikes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // get id of clicked bike and delete
        $bike = Bike::find($id);
        $bike->delete();

        return redirect(route('bikes.index'));
    }

    public function active($id)
    {
        // check the clicked bike, change the value to be (in)active and refresh the page.
        $bike = Bike::find($id);

        if ($bike->is_active == 0) {
            $bike->update(['is_active' => 1]);
        } else if ($bike->is_active == 1) {
            $bike->update(['is_active' => 0]);
        }
        $bike->save();

        return back();
    }
}
