<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MovieModel;

class MainController extends Controller
{
    public function index(){
        return view('home');
    }
}
