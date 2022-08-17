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
        return view('pdf');
    }
    public function add(Request $request){
       // dd($request);
       $pdf = new pdf;
       $pdf->id=1;
       $pdf->URL=$request->URL;
       $pdf->save();

    }
}

