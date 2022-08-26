@extends('layouts.app')

@section('content')
<form method="POST" action="/autor">

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Selecionar Livro</h3>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">

                                <div class="panel-body">

                                    <select name="livros" id="livros">
                                        @foreach ($livros as $livro)

                                        <option value="{{$livro->id}}">{{$livro->nome}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Selecionar Autor</h3>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">

                                <div class="panel-body">

                                    <select name="autores" multiple id="autores">
                                        @foreach ($autores as $autor)

                                        <option value="{{$autor->id}}">{{$autor->nome}}</option>
                                        @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>AUTORES</h3>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">

                                <div class="panel-body">

                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <!-- Dados necessários para o autor-->
                                        <label for="">Nome</label> <input class="form-control" type="text" name="nome"> <br />
                                        <label for="">Tipo de Autor </label> <input class="form-control" type="text" name="descricao"> <br />
                                        <button type="submit" class="btn btn-primary"> Submeter </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>

@endsection