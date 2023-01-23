@extends('layout.principal')

@section('conteudo')

    <h1>
        Novo Ramal
    </h1>

    <form action="/ramais/adciona" method="POST">

        <input type="hidden" name="_token" value="{{{csrf_token()}}}">

        <div class="form-group">
            <label>Nome: </label>
            <input name="nome"  class="form-control">
        </div>

        <div class="form-group">
            <label>Ramal: </label>
            <input name="ramal" class="form-control">
        </div>
        
        <div class="form-group">
            <label>E-mail: </label>
            <input name="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>

    </form>

@stop
