<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\apoios;
use App\Models\livro;

class ApoioController extends Controller
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
        $apoios=apoios::all();
        return view('apoios')->with('livros',$livros)->with('apoios',$apoios);
       
    }
    public function add(Request $request){
        //dd($request);
      if ($request->apoios){
        $apoios = apoios::find($request->apoios);
      }
      else{
            $apoios = new apoios();
            $apoios->id=$request->id;
            $apoios->save(); 
      }
            

       $livro = livro::find($request->livros);
       $livro->apoios()->attach($apoios->id);
       return view('home');
    }
}

