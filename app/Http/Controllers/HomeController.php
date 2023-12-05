<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home() 
    {
        $list_songs = Song::all();
        return view('home', [
            "list_songs" => $list_songs
        ]);
    }
}
