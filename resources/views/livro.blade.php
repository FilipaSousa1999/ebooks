@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                     <h3>LIVROS</h3>
                     <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                    
                                    <div class="panel-body">
                    
                                    <form method="POST" action="/livro">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Dados necessários para o livro-->
                                     <label for="">Título</label> <input type="text" name="titulo">   <br />
                                     <label for="">Capa</label> <input  type="text" name="capa"> <br />
                                     <label for="">Autor</label> <input  type="text" name="autor"> <br />
                                     <label for="">Editor</label> <input type="text" name="editor"> <br />
                                     <label for="">Ano</label> <input  type="number" name="ano"> <br />
                                     <label for="">Vídeo</label> <input  type="text" name="video"> <br />
                                     <label for="">Áudio</label> <input  type="text" name="audio"> <br />
                                     <label for="">PDF</label> <input  type="text" name="pdf"> <br />
                                     <label for="">Prémios</label> <input  type="text" name="premios"> <br />
                                     <label for="">Apoios</label> <input  type="text" name="capa"> <br />
                                     <button type="submit" class="btn btn-primary"> Submeter </button>
                                    </form>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
