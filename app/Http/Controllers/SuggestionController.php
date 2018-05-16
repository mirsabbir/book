<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function index(Request $request){
        $res = \App\Book::search($request->q)->get();
        return response()->json($res);

    }
}
