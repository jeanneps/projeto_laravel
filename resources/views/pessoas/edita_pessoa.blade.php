@extends('layouts.main')

@section('titulo', 'Lista de Pessoas')

@section('conteudo')

<form action="/pessoas/{{$p->id}}" method="post">
    @csrf
    @method('PUT')
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" value="{{$p->nome}}">

    <input type="submit" value="Atualizar">
</form>

@endsection