<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\premios;
use App\Models\livro;

class PremioController extends Controller
{
    //
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $livros=livro::all();
        $premios=premios::all();
        return view('premios')->with('livros',$livros)->with('premios',$premios);
       
    }
    public function add(Request $request){
        //dd($request);
      if ($request->premios){
        $autor = premios::find($request->premios);
      }
      else{
            $premios = new premios();
            $premios->id=$request->id;
            $premios->save(); 
      }
            

       $livro = livro::find($request->livros);
       $premios->premios()->attach($premios->id);
       return view('home');
    }
}

