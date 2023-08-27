<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = config('comics');
        foreach ($comics as &$comic) {
            $comic['artists'] = implode($comic['artists']);
            $comic['writers'] = implode($comic['writers']);
        };

        return view('comics.index', compact('comics'));
    }
}
