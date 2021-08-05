<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('deletar_livro',['id'=>$livro->id]) }}" method="post">
        @csrf
        <p>ue apagar mesmo esse livro?
             {{$livro->titulo}}
        </p>
        <button>sim odeio livros</button>
    </form>

</body>

</html>
