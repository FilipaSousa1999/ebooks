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
        return view('ali');
    }
    public function add(Request $request){
       // dd($request);
       $ali = new ali;
       $ali->idALI=1;
       $ali->URL=$request->URL;
       $ali->save();
    }
}
