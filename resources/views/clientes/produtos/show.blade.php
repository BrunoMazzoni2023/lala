<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    
    <title>Visualizar Produt</title>
</head>
<body style="background-color: aqua">
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
                    <a class="nav-link" aria-current="page" href="clientes/create">Cadastrar Cliente</a>
                </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="clientes">Listar Clientes Cliente</a>
                  </li>
            
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 12%">
                  <button class="btn btn-outline-success"  type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

</header>

 <main class="container" style="margin-top:20px ">
   
  <a  type="button" href="{{route('clientes.produtos.create')}}" class="btn btn-primary" > NOVO PRODUTO</a>
  <a style="margin-left: 20px" href="clientes/produtos" class="btn btn-success">Voltar</a> 


<div class="container" style="margin-top: 100px;">
<body style="background-color: rgb(46, 81, 92)" >

      <div class="table-responsive">
        <table class="table table-light">
        <thead class="table-warning">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Codigo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Imposto</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$produtos->id}}</th>
                <td>{{$produtos->codigo}}</td>
                <td>{{$produtos->descricao}}</td>
                <td>{{$produtos->preco}}</td>
                <td>{{$produtos->imposto}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>


</html>