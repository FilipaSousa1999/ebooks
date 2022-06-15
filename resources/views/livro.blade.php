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
                                     <textarea name="content" class="form-control"></textarea> <br>
                                     <textarea name="titlo" class="form-control"></textarea>
                                     <textarea name="autor" class="form-control"></textarea>
                                     <textarea name="ano" class="form-control"></textarea>

                                     <button type="submit" class="btn btn-primary"> Add Note</button>
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
