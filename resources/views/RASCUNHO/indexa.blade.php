<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<h1>Cliente :{{ $cliente->nome }}
    
</h1>

(<a href="{{ route('produtos.create', $cliente->id) }}"> Adicionar </a>)

{{-- <form action="{{ route('clientes.index')}}">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form> --}}

<table class="table" >
    <thead>
      <tr>

     
        <th scope="col">Codigo</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Imposto</th>
    </tr>
</thead>
<tbody>
@foreach ($produto as $produtos)
<tr>
    <td>{{$produtos->codigo}}</td>
    <td>{{$produtos->descricao}}</td>
    <td>{{$produtos->preco}}</td>
    <td>{{$produtos->imposto}}</td>

    <td>
        <a type="button" href="{{ route ('clientes.edit', $cliente->id) }}" class="btn btn-success">EDITAR </a>
      
    </td>

    <td>
        <a type="button" href="{{ route ('clientes.show', $cliente->id) }}" class="btn btn-primary">EDITAR </a>
    </td>
</tr>
@endforeach
</ul>





</body>
</html>

