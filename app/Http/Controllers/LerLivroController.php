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
        $livros=livro::all();
        return view('lerlivro')->with('livros', $livros);
    }
    public function add(Request $request){
       // dd($request);
       $livro = new livro;
       $livro->id_pdf=1;
    

    }
}

