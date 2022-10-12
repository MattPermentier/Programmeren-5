<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateBikeController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $updating = DB::table('bikes')
            ->where('id', $request->input('cid'))
            ->update([
                'brand'=>$request->input('brand'),
                'model'=>$request->input('model'),
                'category'=>$request->input('category'),
                'description'=>$request->input('description'),
                'image'=>$request->input('image'),
            ]);
        return redirect('/');
    }
}
