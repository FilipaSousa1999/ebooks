<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\livro;
use App\Models\ali;
class AliController extends Controller
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
        $ali=ali::all();
        return view('atividadesALI')->with('livros',$livros)->with('ali',$ali);;
    }
    public function add(Request $request){
       // dd($request);
       $ali = new ali;
       $ali->idALI=1;
       $ali->URL=$request->URL;
       $ali->save();
    $livro = livro::find($request->livros);
    $livro->ali()->attach($ali->id);
    return view('home');
}
   
}
