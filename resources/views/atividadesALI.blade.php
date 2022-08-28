@extends('layouts.app')

@section('content')
<form method="POST" action="/ali">

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
                    <h3>Selecionar ALI</h3>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">

                                <div class="panel-body">

                                    <select name="ali" multiple id="ali">
                                        @foreach ($ali as $ali)

                                        <option value="{{$ali->URL}}">{{$ali->URL}}</option>
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
                    <h3>ALI</h3>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">

                                <div class="panel-body">

                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <!-- Dados necessários para o ali-->
                                        <label for="">URL</label> <input class="form-control" type="text" name="URL"> <br />
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