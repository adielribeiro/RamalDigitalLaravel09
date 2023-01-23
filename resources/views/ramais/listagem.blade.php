
@extends('layout.principal')

@section('conteudo')

<link href="css/custom.css" rel="stylesheet">

@if (empty($ramais))
    <div class="alert alert-danger">
        Nenhum ramal encontrado!!
    </div>
@else

    <h3>Lista de ramais</h3>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <td><b>Nome</b></td>
            <td><b>Ramal</b></td>
            <td><b>E-mail</b></td>
        </tr>
        @foreach ($ramais as $r)
            <tr>
                <td>{{$r->nome}}</td>
                <td>{{$r->ramal}}</td>
                <td>{{$r->email}}</td>
                <td>
                    <a href="/ramais/visualizar/{{$r->id}}">
                        Visualizar
                    </a>
                </td>
                <td>
                    <a href="/ramais/remover/{{$r->id}}" >
                        Remover
                    </a>
                </td>


            </tr>
       @endforeach
    </table>

@endif

@if (old('ramal'))
    <div class="alert alert-success">
        <strong>Sucesso!, </strong><a>o ramal: {{old('ramal')}}, foi adcionado.</a>
    </div>
@endif

@stop

