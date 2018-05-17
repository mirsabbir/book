<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {  
        $this->authorize('edit',\Auth::user());

        $image = $request->file('cover');
        $name = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('images/uploads',$name);
        $book = Book::create([
            'name'=>$request->name,
            'publisher'=>$request->publisher,
            'tag1'=>$request->tag1,
            'tag2'=>$request->tag2,
            'tag3'=>$request->tag3,
            'tag4'=>$request->tag4,
            'tag5'=>$request->tag5,
            'cover' => $path,
        ]);
        
        $book->save();


        return view('home');
    }


}
