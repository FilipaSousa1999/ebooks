<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\livro;

class LerLivroController extends Controller
{
    //
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('tipoautores');
    }
    public function add(Request $request){
       // dd($request);
       $tipoautores = new tipoautores;
       $tipoautores->idtipo_autores=1;
       $tipoautores->descricao=$request->descricao;
       $tipoautores->save(); 
    

    }
}

