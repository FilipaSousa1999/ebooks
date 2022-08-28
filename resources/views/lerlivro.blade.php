@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                     <h3>LER LIVRO</h3>
                     @foreach ($livros as $livro)
                         <a href="/livro/{{$livro->id}}">{{$livro->nome}}</a>
                     @endforeach
                     @foreach ($livros as $livro)
                        <h3> Livro {{$livro->nome}}</h3>
                        <ul>
                            <li>Nome:  {{$livro->nome}}</li>
                            <li> Ano:  {{$livro->ano}}</li>
                        
                        </ul>
                    @endforeach
            </div>
         </div>
    </div>           
</div>
@endsection
