<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Clientes Início</title>
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

  @if ($errors->any())
  @foreach ($errors->all() as $error)   
  @endforeach   
          <div class="alert alert-danger">
              <strong>{{ $error }}</strong> 
          </div>  
    </ul>
@endif 


 
 <h1 style="color: rgb(250, 250, 250)" > Clientes Editar  </h1>
 


  



  <div class="container" style="background-color:rgba(145, 145, 145, 0.993)">
   
        <form method="post" action="{{route('clientes.update', $cliente->id)}}">
            @csrf
            @method('put')

            <div class="mb-3">
              <label for="codigocliente" class="form-label">Codigocliente</label>
              <input type="text"  class="form-control" value="{{ $cliente->codigocliente}}" name="codigocliente" placeholder="Codigo CLiente">
            </div>

            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control" value="{{ $cliente->nome}}" placeholder="Nome:">
            </div>

            <input type="radio" id="pessoa" name="pessoa" value="J">
            <label for="pessoa">fisico</label><br>

            <input type="radio" id="pessoa" name="pessoa" value="F">
            <label for="pessoa">Juridico</label><br>

            <input type="radio" id="pessoa" name="pessoa" value="O">
            <label for="pessoa">Outros</label>
            
            <div class="mb-3">
              <label for="cnpj" class="form-label">CNPJ</label>
              <input type="text" name="cnpj" class="form-control" value="{{ $cliente->cnpj}}" placeholder="Cnpj:">
            </div>

            <div class="mb-3">
              <label for="estado" class="form-label">Estado</label>
              <input type="text" name="estado" class="form-control" value="{{ $cliente->estado}}" placeholder="Estado:">
            </div>

            <div class="mb-3">
              <label for="data_nascimento" class="form-label">Data De Nascimento</label>
              <input type="date" name="data_nascimento" class="form-control" value="{{ $cliente->data_nascimento}}" placeholder="Data De nascimento:">
            </div>
 

            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
            <a style="margin-left: 20px" href="/clientes" class="btn btn-success">Voltar</a>
          </form>

  
  </div>




 
<script src="js/script.js"></script>
</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</html>


