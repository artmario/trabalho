<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;

class LivroController extends Controller
{
    public function home()
    {
        $livros=Livros::all();
        return view('index')->with('livros',$livros);
    }
    public function create()
    {
        return view('livros.create');
    }
    public function store(Request $requisao)
    {
        //dd($requisao->all());
        Livros::create([
            'titulo' => $requisao->titulo,
            'autor_principal' => $requisao->autor_principal,
            'isbn' => $requisao->isbn,
            'preco' => $requisao->preco,
            'editora' => $requisao->editora,
            'ano_lancamento' => $requisao->ano_lancamento
        ]);
        return "livro criado";
    }
    public function show($id)
    {
        $livro=Livros::findOrFail($id);
        return view('livros.show', ['livro'=>$livro]);
    }
    public function edit($id)
    {
        $livro=Livros::findOrFail($id);
        return view('livros.edit', ['livro'=>$livro]);
    }
    public function update(Request $requisao,$id)
    {
        $livro=Livros::findOrFail($id);
        $livro->update([
            'titulo' => $requisao->titulo,
            'autor_principal' => $requisao->autor_principal,
            'isbn' => $requisao->isbn,
            'preco' => $requisao->preco,
            'editora' => $requisao->editora,
            'ano_lancamento' => $requisao->ano_lancamento
        ]);
        return "prod atualizado";
    }
    public function delete($id)
    {
        $livro=Livros::findOrFail($id);
        return view('livros.delete', ['livro'=>$livro]);
    }
    public function exluir($id)
    {
        $livro=Livros::findOrFail($id);
        $livro->delete();
        return "apagou de vez";
    }


}
