<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>home</title>
</head>
<body>
<a href="/">
    <button>home</button>
</a>
<a href="/livro/novo">
    <button>novo</button>
</a>
<div class="container">
    @if (isset($livros))
        @foreach ($livros as $livro)
            <div class="card">
                <div>
                    <label for="titulo">titulo</label>
                    <input type="text" name="titulo" value="{{$livro->titulo}}"/>
                </div>
                <div>
                    <label for="autor_principal">autor principal</label>
                    <input type="text" name="autor_principal" value="{{$livro->autor_principal}}"/>
                </div>
                <div>
                    <label for="isbn">isbn</label>
                    <input type="text" name="isbn" value="{{$livro->isbn}}"/>
                </div>
                <div><label for="preco">preço</label>
                    <input type="number" name="preco" min="1" step="any" value="{{$livro->preco}}"/>
                </div>
                <div>
                    <label for="editora">editora</label>
                    <input type="text" name="editora" value="{{$livro->editora}}"/>
                </div>
                <div>
                    <label for="ano_lancamento">ano de lançamento</label>
                    <input type="number" name="ano_lancamento" value="{{$livro->ano_lancamento}}"/>
                </div>
                <div>
                    <a href="/livro/editar/{{$livro->id}}">
                        <button>editar</button>
                    </a>
                </div>
                <div>
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
