<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $comics = config('comics');

        return view('home', compact('comics'));
    }
}
