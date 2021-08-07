<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/home.css" rel="stylesheet">
    <title>home</title>
</head>
<body>
<div class="nav-bar">
<a href="/">
    <p>home</p>
</a>
<a href="/livro/novo">
    <button>novo</button>
</a>
</div>
<div class="container">
    @if (isset($livros))
        @foreach ($livros as $livro)
            <div class="card">
                <div class="row">
                    <label for="titulo">titulo</label>
                    <input type="text" name="titulo" value="{{$livro->titulo}}" disabled="disabled"/>
                </div>
                <div class="row">
                    <label for="autor_principal">autor principal</label>
                    <input type="text" name="autor_principal" value="{{$livro->autor_principal}}" disabled="disabled"/>
                </div>
                <div class="row">
                    <label for="isbn">isbn</label>
                    <input type="text" name="isbn" value="{{$livro->isbn}}" disabled="disabled"/>
                </div>
                <div class="row">
                    <label for="preco">preço</label>
                    <input type="number" name="preco"  value="{{$livro->preco}}" disabled="disabled"/>
                </div>
                <div class="row">
                    <label for="editora">editora</label>
                    <input type="text" name="editora" value="{{$livro->editora}}" disabled="disabled"/>
                </div>
                <div class="row">
                    <label for="ano_lancamento">ano de lançamento</label>
                    <input type="number" name="ano_lancamento" value="{{$livro->ano_lancamento}}" disabled="disabled"/>
                </div>
                <div style="display: flex">
                    <a href="/livro/editar/{{$livro->id}}">
                        <button>editar</button>
                    </a>
                    <a href="/livro/excluir/{{$livro->id}}">
                        <button>exluir</button>
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <p>sem livros ainda</p>
    @endif

</div>
</body>
</html>
