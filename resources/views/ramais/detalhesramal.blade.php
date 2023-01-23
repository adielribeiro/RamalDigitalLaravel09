
@extends('layout.principal')

@section('conteudo')

    <h3>Detalhes do ramal: {{$r->ramal}}</h3>
    
    <ul class="list-group">
        <li class="list-group-item">
            <b>Nome: </b> {{$r->nome}}
        </li>
        <li class="list-group-item">
            <b>E-mail: </b> {{$r->email}}
        </li>
    </ul>

@stop

