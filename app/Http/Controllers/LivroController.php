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
        return view('livro');
    }
    public function add(Request $request){
       // dd($request);
       $livro = new livro;
       $livro->id_pdf=1;
       $livro->nome=$request->titulo;
       $livro->estatistica=10;
       $livro->ano=$request->ano;
       $livro->ISBN="as";
       $livro->editor=$request->editor;
       $livro->save();

    }
    public function lerlivro(Request $request)
    {
        return view ('lerlivro');
    }
    public function verpdf(Request $request)
    {
        return view ('verpdf');
    }
}

