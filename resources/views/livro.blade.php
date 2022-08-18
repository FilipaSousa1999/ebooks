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
                                     <label for="">Título</label> <input class="form-control" type="text" name="titulo">   <br />
                                     <label for="">Capa</label> <input  class="form-control" type="text" name="capa"> <br />
                                     <label for="">Autor</label> <input  class="form-control" type="text" name="autor"> <br />
                                     <label for="">Editor</label> <input class="form-control" type="text" name="editor"> <br />
                                     <label for="">Ano</label> <input  class="form-control" type="number" name="ano"> <br />
                                     <label for="">Vídeo</label> <input class="form-control" type="text" name="video"> <br />
                                     <label for="">Áudio</label> <input  class="form-control" type="text" name="audio"> <br />
                                     <label for="">PDF</label> <input  class="form-control" type="text" name="pdf"> <br />
                                     <label for="">Prémios</label> <input class="form-control" type="text" name="premios"> <br />
                                     <label for="">Apoios</label> <input  class="form-control" type="text" name="capa"> <br />
                                     <button type="submit" class="btn btn-primary"> Submeter </button>
                                    </form>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

              
                <h3>ALI</h3>
                     <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                    
                                    <div class="panel-body">
                    
                                    <form method="POST" action="/livro">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Dados necessários para a ALI -->
                                     <label for="">URL</label> <input class="form-control" type="text" name="URL">   <br />
                                     <button type="submit" class="btn btn-primary"> Submeter </button>
                                    </form>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <h3>ILUSTRACOES</h3>
                     <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                    
                                    <div class="panel-body">
                    
                                    <form method="POST" action="/livro">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Dados necessários para as ilustracoes -->
                                     <label for="">Ilustracao</label> <input class="form-control" type="text" name="ilustracao">   <br />
                                     <button type="submit" class="btn btn-primary"> Submeter </button>
                                    </form>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>   
                <h3>TIPO DE AUTORES</h3>
                     <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                    
                                    <div class="panel-body">
                    
                                    <form method="POST" action="/livro">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Dados necessários para as ilustracoes -->
                                     <label for="">Descricao</label> <input class="form-control" type="text" name="descricao">   <br />
                                     <button type="submit" class="btn btn-primary"> Submeter </button>
                                    </form>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <h3>PDF</h3>
                     <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                    
                                    <div class="panel-body">
                    
                                    <form method="POST" action="/livro">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Dados necessários para o PDF -->
                                     <label for="">PDF</label> <input class="form-control" type="text" name="URL">   <br />
                                     <button type="submit" class="btn btn-primary"> Submeter </button>
                                    </form>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <h3>AUDIO</h3>
                     <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                    
                                    <div class="panel-body">
                    
                                    <form method="POST" action="/livro">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Dados necessários para as ilustracoes -->
                                     <label for="">Audio</label> <input class="form-control" type="text" name="ficheiro_audio">   <br />
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
