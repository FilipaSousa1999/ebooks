<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\autores;
use App\Models\tipo_autor;

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
        return view('tipo_autor');
    }
    public function add(Request $request){
       // dd($request);
       $autor = new autores;
       $autor->nome=$request->nome;
       $tipoautores = new tipo_autor;
       $tipoautores->descricao=$request->descricao;
       $tipoautores->save();
       $autor->save();
       


       

    }
}

