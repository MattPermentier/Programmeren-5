<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditBikeController extends Controller
{
    public function edit($id)
    {
        $row = DB::table('bikes')
            ->where('id', $id)
            ->first();
        $data = [
            'Info'=>$row,
        ];

        return view('edit', $data);
    }
}
