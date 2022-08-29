<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\vencedores;
use App\Models\livro;

class VencedorController extends Controller
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
        $vencedores=vencedores::all();
        return view('vencedores')->with('livros',$livros)->with('vencedores',$vencedores);
       
    }
    public function add(Request $request){
        //dd($request);
      if ($request->vencedores){
        $vencedores = vencedores::find($request->vencedores);
      }
      else{
            $vencedores = new vencedores();
            $vencedores->texto=$request->texto;
            $vencedores->save(); 
      }
            

       $livro = livro::find($request->livros);
       $livro->vencedores()->attach($vencedores->id);
       return view('home');
    }
}

