@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                     <h3>DETALHES LIVRO</h3>
                     <p>
                        {{$data['livro']->nome}}
                     </p>
                     <p>
                        {{$data['livro']->ano}}
                     </p>
                     <p>
                        {{$data['audio']->ficheiro_audio}}
                     </p>
                     <p>
                        {{$data['video']->ficheiro}}
                     </p>                    
                     <p>
                        {{$data['capa']->ficheiro_imagem}}
                     </p>
            </div>
         </div>
    </div>           
</div>
@endsection
