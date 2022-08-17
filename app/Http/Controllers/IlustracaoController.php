<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\livro;

class LivroController extends Controller
{
    //
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('ilustracoes');
    }
    public function add(Request $request){
       // dd($request);
       $ilustracao = new ilustracao;
       $ilustracao->idilustracao=1;
       $ilustracao->ilustracao=$request->ilutracao;
       $ilustracao->save();

    }
}

