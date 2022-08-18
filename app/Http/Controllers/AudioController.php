<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\livro;

class AudioController extends Controller
{
    //
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('audio');
    }
    public function add(Request $request){
       // dd($request);
       $audio = new audio;
       $audio->idaudio=1;
       $audio->ficheiro_audio=$request->ficheiro_audio;
       $audio->save();
    }
    public function ouviraudio(Request $request){
        return view ('ouviraudio');
    }
}

