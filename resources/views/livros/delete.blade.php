<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/home.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<div class="nav-bar">
    <a href="/">
        <button>home</button>
    </a>
</div>
<p>deseja mesmo deletar o livro <strong>{{$livro->titulo}}</strong>?</p>
<div style="display: flex">
<form action="{{ route('deletar_livro',['id'=>$livro->id]) }}" method="post">
    @csrf
    {{ method_field('DELETE') }}
    <button>sim - não tenho coração</button>
</form>
<a href="/">
    <button>não - educação é o futuro</button>
</a>
</div>

</body>

</html>
