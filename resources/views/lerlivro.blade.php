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
            </div>
         </div>
    </div>           
</div>
@endsection
