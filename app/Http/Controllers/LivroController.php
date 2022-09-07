<?php

namespace App\Http\Controllers;

use App\Models\autor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\livro;
use App\Models\video;
use App\Models\capa;
use App\Models\audio;
use App\Models\ilustracoes;
use App\Models\pdf;
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
    public function lerlivro(Request $request)
     {
        $livros=livro::all();
        return view('lerlivro')->with('livros', $livros);
     }
     public function verlivro($id)
     {
        $livro = livro::find($id);
        $ilustracoes = $livro->ilustracoes();
        $audio = $livro->audio();
        $pdf = $livro->pdf();
        $capa=$livro->capa();
        $video=$livro->video();
        $autores=$livro->autores();
        $data=array('autores'=>$autores, 'livro'=>$livro,'ilustracoes'=>$ilustracoes, 'audio'=>$audio, 'pdf'=>$pdf,'capa'=>$capa, 'video'=>$video);
        return view ('detalhelivro',compact('data'));
     }
     public function add(Request $request){
        $video = new video;
        $capa = new capa;
        $ilustracao = new ilustracoes;
        $audio = new audio;
        $pdf = new pdf;


        if ($request->hasFile('pdf'))
        {
            $file = $request->file('pdf');
            $originalname = $file->getClientOriginalName();
            $path = $file->storeAs('public/', $originalname);
            $pdf->URL=$path;
        }
        if ($request->hasFile('video'))
        {
            $file = $request->file('video');
            $originalname = $file->getClientOriginalName();
            $path = $file->storeAs('public/', $originalname);
            $video->ficheiro=$path;
        }
        if ($request->hasFile('capa'))
        {
            $file = $request->file('capa');
            $originalname = $file->getClientOriginalName();
            $path = $file->storeAs('public/', $originalname);
            $capa->ficheiro_imagem=$path;
        }
        if ($request->hasFile('audio'))
        {
            $file = $request->file('audio');
            $originalname = $file->getClientOriginalName();
            $path = $file->storeAs('public/', $originalname);
            $audio->ficheiro_audio=$path;
        }
        if ($request->hasFile('ilustracoes'))
        {
            $file = $request->file('ilustracoes');
            $originalname = $file->getClientOriginalName();
            $path = $file->storeAs('public/', $originalname);
            $ilustracao->ilustracao=$path;
        }
        // dd($request);
        $livro = new livro;
        $livro->nome=$request->titulo;
        $livro->estatistica=10;
        $livro->ano=$request->ano;
        $livro->ISBN="as";
        $livro->editor=$request->editor;
        $livro->save();
        $livro->capa()->save($capa);
        $livro->video()->save($video);
        $livro->pdf()->save($pdf);
        $livro->ilustracoes()->save($ilustracao);
        $livro->audio()->save($audio);
 
     }
 
     public function teste(){
         
          $autor = new autor;
          $autor->nome = "Filipa";
          $autor->save();
 
          $livro = new livro;
          $livro->id_pdf=1;
          $livro->nome="Branca de Neve";
          $livro->estatistica=10;
          $livro->ano=2020;
          $livro->ISBN="978-3-16-148410-0";
          $livro->editor="Filipe";
          $livro->save();
 
          $livro->autores()->attach($autor->id);
 
          dd("testing funcion");
 
      }
 
     public function testeAutLiv(){
         $livro = livro::find(1);
         $autores_livro = $livro->autores()->get();
         dd($autores_livro); // o objeto $autores_livro  é do tipo autor
     }
 
     public function testeLivAut(){
         $autor = autor::find(2);
         $livros_autor = $autor->livros()->get();
         dd($livros_autor); // o objeto $livros_autor livro é do tipo livros_autor
     }
 
     public function addRandLivro(Request $request){
         $autor = autor::find(1); //query para seleccionar o autor com id 1 na bd
         $autor2 = autor::find(2); //query para seleccionar autor com o id 2 na bd
 

 
 
         //criar um livro com valores aleatórios
         $date = Carbon::now()->valueOf(); //data em milisegundos
 
         $livro = new livro;
         $livro->id_pdf=1;
         $livro->nome="Branca de Neve".strval($date);
         $livro->estatistica=10;
         $livro->ano=2020;
         $livro->ISBN="".strval($date);
         $livro->editor="Filipe".strval($date);
         $livro->save();
 
         $livro->autores()->attach($autor->id);
        // $livro->autores()->attach($autor2->id);   // podemos adicionar mais que um autor ao livro (pois trata-se de uma relação de muitos para muitos)
         dd("added livro");
 
     }
}