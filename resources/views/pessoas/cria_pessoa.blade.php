@extends('layouts.main')

@section('titulo', 'Adicionar')

@section('conteudo')

<form action="/pessoas" method="post">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" id= "nome" name= "nome">

    <input type="submit" value="Enviar">

</form>

@endsection
