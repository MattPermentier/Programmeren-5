<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteBikeController extends Controller
{
    public function delete($id)
    {
        $delete = DB::table('bikes')
            ->where('id', $id)
            ->delete();
        return redirect('/');
    }
}
