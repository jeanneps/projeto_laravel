<?php

namespace App\Http\Controllers;

use App\Models\pessoa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.lista_pessoas', ['pessoas'=>$pessoas]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pessoas.cria_pessoa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->nome = $request->nome;
        $pessoa->save();
        return redirect('pessoas');
    }

    /**
     * Display the specified resource.
     */
    public function show(pessoa $pessoa)
    {
        return view ('pessoas.detalhes_pessoa',['pessoa'=>$pessoa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pessoa $pessoa)
    {
        return view('pessoas.edita_pessoa',['p'=>$pessoa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $pessoa->update($request->all());
        return redirect('pessoas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pessoa $pessoa)
    {
        Pessoa::findOrFail($pessoa->id)->delete();
        return redirect('pessoas');
    }
}
