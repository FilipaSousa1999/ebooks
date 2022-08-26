<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\autor;
use App\Models\tipo_autor;
use App\Models\livro;

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
        $livros=livro::all();
        $autores=autor::all();
        return view('autores')->with('livros',$livros)->with('autores',$autores);
       
    }
    public function add(Request $request){
        //dd($request);
      if ($request->autores){
        $autor = autor::find($request->autores);
      }
      else{
            $autor = new autor;
            $autor->nome=$request->nome;
            $tipoautores = new tipo_autor;
            $tipoautores->descricao=$request->descricao;
            //$tipoautores->save();
            $autor->save(); 
      }
            

       $livro = livro::find($request->livros);
       $livro->autores()->attach($autor->id);
       return view('home');
    }
}

