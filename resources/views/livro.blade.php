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
                    
                                    <form method="POST" action="/livro" enctype="multipart/form-data">  
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <!-- Dados necessários para o livro-->
                                     <label for="">Título</label> <input class="form-control" type="text" name="titulo">   <br />
                                     <label for="">Capa</label> <input  class="form-control" type="file" name="capa"> <br />
                                     <label for="">Editor</label> <input class="form-control" type="text" name="editor"> <br />
                                     <label for="">Ano</label> <input  class="form-control" type="number" name="ano"> <br />
                                     <label for="">Vídeo</label> <input class="form-control" type="file" name="video"> <br />
                                     <label for="">Áudio</label> <input  class="form-control" type="file" name="audio"> <br />
                                     <label for="">PDF</label> <input  class="form-control" type="file" name="pdf"> <br />
                                   <!--  <label for="">Prémios</label> <input class="form-control" type="file" name="premios"> <br /> -->
                                     <!--<label for="">Apoios</label> <input  class="form-control" type="file" name="capa"> <br /> -->
                                     <label for="">Ilustracoes</label> <input  class="form-control" type="file" name="ilustracao"> <br />
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
</div>
@endsection
