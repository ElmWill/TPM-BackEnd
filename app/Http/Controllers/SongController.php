<?php

namespace App\Http\Controllers;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function Redirect() {
        return view('songs');
    }

    public function AddSong(Request $request) {
        // dd($request);
        Song::create([
            'song_name' =>  $request -> song_name_input,
            'author' => $request -> author_input
        ]);
        return redirect('/home');
    }
}
