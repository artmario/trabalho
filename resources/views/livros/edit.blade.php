<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('alterar_livro',['id'=>$livro->id]) }}" method="post">
        @csrf
        <div>
            <label for="titulo">titulo</label>
            <input type="text" name="titulo" value="{{$livro->titulo}}" />
        </div>
        <div>
            <label for="autor_principal">autor principal</label>
            <input type="text" name="autor_principal" value="{{$livro->autor_principal}}" />
        </div>
        <div>
            <label for="isbn">isbn</label>
            <input type="text" name="isbn" value="{{$livro->isbn}}" />
        </div>
        <div><label for="preco">preço</label>
            <input type="number" name="preco" min="1" step="any" value="{{$livro->preco}}" />
        </div>
        <div>
            <label for="editora">editora</label>
            <input type="text" name="editora" value="{{$livro->editora}}" />
        </div>
        <div>
            <label for="ano_lancamento">ano de lançamento</label>
            <input type="number" name="ano_lancamento" value="{{$livro->ano_lancamento}}" />
        </div>
        <button type="submit">salvar</button>
    </form>
</body>

</html>
