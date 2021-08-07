<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livros;
use Illuminate\Database\QueryException;

class LivroController extends Controller
{
    public function home()
    {
        $livros = Livros::all();
        return view('index')->with('livros', $livros);
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $requisao)
    {
        try {
            Livros::create([
                'titulo' => $requisao->titulo,
                'autor_principal' => $requisao->autor_principal,
                'isbn' => $requisao->isbn,
                'preco' => $requisao->preco,
                'editora' => $requisao->editora,
                'ano_lancamento' => $requisao->ano_lancamento
            ]);
            return view("livros.operacao", ['mensagem' => "livro criado com sucesso"]);
        } catch (QueryException  $e) {
            $msg = "não foi possivel inserir esse dados";
            return view("livros.operacao", ['mensagem' => $msg]);
        } catch (Exception $e) {
            $msg = "opa amigo, deu erro :" . $e->getMessage();
            return view("livros.operacao", ['mensagem' => $msg]);
        }
    }

    public function show($id)
    {
        $livro = Livros::findOrFail($id);
        return view('livros.show', ['livro' => $livro]);
    }

    public function edit($id)
    {
        $livro = Livros::findOrFail($id);
        return view('livros.edit', ['livro' => $livro]);
    }

    public function update(Request $requisao, $id)
    {
        try {
            $livro = Livros::findOrFail($id);
            $livro->update([
                'titulo' => $requisao->titulo,
                'autor_principal' => $requisao->autor_principal,
                'isbn' => $requisao->isbn,
                'preco' => $requisao->preco,
                'editora' => $requisao->editora,
                'ano_lancamento' => $requisao->ano_lancamento
            ]);
            return view("livros.operacao", ['mensagem' => "livro atualizado com sucesso"]);
        } catch (QueryException  $e) {
            $msg = "não foi possivel fazer essa alteração" . $e->getMessage();
            return view("livros.operacao", ['mensagem' => $msg]);
        } catch (Exception $e) {
            $msg = "opa amigo, deu erro :" . $e->getMessage();
            return view("livros.operacao", ['mensagem' => $msg]);
        }
    }

    public function delete($id)
    {
        $livro = Livros::findOrFail($id);
        return view('livros.delete', ['livro' => $livro]);
    }

    public function exluir($id)
    {
        try {
            $livro = Livros::findOrFail($id);
            $livro->delete();
            return view("livros.operacao", ['mensagem' => "livro exluido com sucesso"]);
        } catch (QueryException  $e) {
            $msg = "aparentemente esse livro não existe." . $e->getMessage();
            return view("livros.operacao", ['mensagem' => $msg]);
        } catch (Exception $e) {
            $msg = "opa amigo, deu erro :" . $e->getMessage();
            return view("livros.operacao", ['mensagem' => $msg]);
        }
    }


}
