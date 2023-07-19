<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

    <title>Produtos Início</title>
</head>
<body style="background-color: rgb(46, 81, 92)" >
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="/">HOME</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="clientes/create">Cadastrar Cliente</a>
                </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="clientes">Listar Clientes Cliente</a>
                  </li>
            
                </ul>
          
              </div>
            </div>
          </nav>
    </header>




<h1 style="color: rgb(243, 240, 240)">Cliente:  {{ $cliente->nome }} </h1>

<main class="container" style="margin-top:20px ">

    
<a  type="button" href="{{ route('produtos.create', $cliente->id) }}" class="btn btn-primary" > NOVO PRODUTO</a>

<a style="margin-left: 20px" href="/clientes" class="btn btn-success">Voltar</a> 



{{-- <form action="{{ route('clientes.index')}}">
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>
</form> --}}


<div class="table-responsive">
    <table class="table table-light">
    <thead class="table-warning">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Descrição</th>
        <th scope="col">Preço</th>
        <th scope="col">Imposto</th>
        <th scope="col">tax</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>

    </tr>
</thead>
<tbody>
@foreach ($produto as $produtos)
<tr>
    <th scope="row">{{$produtos->codigo}}</th>
    <td>{{$produtos->descricao}}</td>
    <td>{{$produtos->preco}}</td>
    <td>{{$produtos->imposto}}</td>
    <td>{{$produtos->preco *= $produtos->imposto /=100}} %</td>
{{-- <td>
 echo "O imposto do produto {$produtos->descricao} é: R$ {$tax}"; 
 
</td>
   --}}
  
{{-- <td>
    <a type="button" href="{{route('produtos.edit', $produtos->id)}}" class="btn btn-warning">EDITAR </a>
</td> --}}
     <td>
        <a type="button" href="{{route('produtos.edit', ['clientes' => $cliente->id, 'id' => $produtos->id, 'id']) }}" class="btn btn-warning">EDITAR </a>
    </td> 
    
    <td>
    <form action="{{route('produtos.destroy', $produtos->id)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit"  class="btn btn-danger">DELETAR </a>
    </form>
</td> 
  
</tr> 
@endforeach
</tbody>
</table>

</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>

