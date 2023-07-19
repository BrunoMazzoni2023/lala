<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">


    <title>Clientes Início</title>
</head>

<body >
    <header>
        <nav class="navbar navbar-dark bg-dark" >
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




      
{{--           <div class="search">
            <form action="{{ route('clientes.index')}}">
              <input type="text" name="search" placeholder="Pesquisar">
              <button>Pesquisar</button>
            </form>
          </div>
 --}}
 
        {{--   <form class="d-flex" role="search">
            <input class="form-control me-2" type="search"  name="search" placeholder="Pesquisar" aria-label="Search" style="width: 30%">
            <button class="btn btn-outline-success"  type="submit">Search</button>
          </form> --}}
<br>
 


<a type="button"  href="{{route('clientes.create')}}" class="btn btn-primary" >Novo Cliente</a>

<a type="button"  href="/" class="btn btn-success" class="btn btn-secondary">Voltar</a>
   

<div class="table-responsive">
    <div class="tablecli">

        <table class="table table-light" >
        
        <thead class="table-warning" >
          
            <tr>
              <th scope="col" >ID</th>
              <th scope="col">CodigoCliente</th>
              <th scope="col">Nome</th>
               <th scope="col">Pessoa</th>
              <th scope="col">Cnpj</th>
              <th scope="col">Estado</th>
              <th scope="col"> Nascimento</th> 
              <th scope="col">Produtos</th>
              <th scope="col">Ver</th>
              <th scope="col">Editar</th>
              <th scope="col">Deletar</th>
            </tr>
          </thead>
          <tbody>
      @foreach ($clientes as $cliente)
        <tr>
              <th scope="row">{{$cliente->id}}</th>
              <td>{{$cliente->codigocliente}}</td>
              <td>{{$cliente->nome}}</td>
              <td>{{$cliente->pessoa}}</td>
              <td>{{$cliente->cnpj}}</td>
              <td>{{$cliente->estado}}</td>
              <td>{{$cliente->data_nascimento}}</td> 

                  <td>
                    <a type="button" href="{{ route ('produtos.index', $cliente->id)}}" class="btn btn-success">Produto ({{ $cliente->produtos->count() }}) </a>
                  </td>
                  
                <td>
                    <a type="button" href="{{route('clientes.show', $cliente->id)}}" class="btn btn-success">VER </a>
                </td>
                    <td>
                        <a type="button" href="{{route('clientes.edit', $cliente->id)}}" class="btn btn-warning">EDITAR </a>
                    </td>
                          <td>
                              <form action="{{route('clientes.destroy', $cliente->id)}}" method="post">
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

{{--         <div class="py-4" style="align-items: center">
          {{ $clientes->appends(['search' => request()->get('search', '') ])->links() }}
        </div> --}}
     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

</body>
</html>











