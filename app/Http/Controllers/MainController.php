<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MainController extends Controller
{
    public function index(){
        $movies = Movie::all();
        return view('home', compact('movies'));
    }

    public function movie($id){
        $movie = Movie::find($id);
        return view('singlemovie', compact('movie'));
    }
}
