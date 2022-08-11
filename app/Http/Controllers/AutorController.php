<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\autores;

class AutorController extends Controller
{
    //
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('autores');
    }
    public function add(Request $request){
       // dd($request);
       $autor = new autores;
       $autor->nome=$request->nome;
       $autor->save();

    }
}

