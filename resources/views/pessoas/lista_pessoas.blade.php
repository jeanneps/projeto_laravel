@extends('layouts.main')

@section('titulo', 'Lista de Pessoas')

@section('conteudo')
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th colspan="2"><a href="pessoas/create">Adicionar</a></th>
    </tr>

    @foreach($pessoas as $p)
    <tr>
        <td><a href="/pessoas/{{$p->id}}">{{$p->id}}</a></td>
        <td>{{$p->nome}}</td>
        <td><a href="/pessoas/{{$p->id}}/edit">Editar</a></td>
        <td>
            <form action="/pessoas/{{$p->id}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Deletar">

            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection