<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>Editar Produto</title>
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
                          <a class="nav-link" aria-current="page" href="/clientes/{cliente}">Clientes</a>
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
                <center> <h1>Editar Produtos</h1></center>

 <main class="container" style="margin-top:20px" >


<div class="container" style="margin-top: 100px;">
        <h1>Atualizar Produto</h1>
        <form method="post" action="{{route('produtos.update', $produto->id)}}">
            @csrf
            @method('PUT')

            <div class="mb-3" style="width: 7%">
              <label for="codigo"  class="form-label">Codigo</label>
              <input type="text"  class="form-control" value="{{ $produto->codigo}}"   name="codigo" placeholder="Codigo :">
            </div>
          
            <div class="mb-3" style="width: 50%">
              <label for="descricao" class="form-label">Descrição</label>
              <input type="text"  class="form-control" value="{{ $produto->descricao}}" name="descricao"  placeholder="Descricao:">
            </div>
               
            <div class="mb-3"style="width: 7%">
              <label for="preco" class="form-label">Preço</label>
              <input type="text"  class="form-control" value="{{ $produto->preco}}" name="preco" placeholder="Preço:">
            </div>
          
            <div class="mb-3"style="width: 8%">
              <label for="imposto" class="form-label">Imposto</label>
              <input type="text" class="form-control" value="{{ $produto->imposto}}" name="imposto" placeholder="Imposto :">
            </div>  
          
              <button type="submit" class="btn btn-primary">Cadastrar</button>   
              <a href="/clientes/{cliente} class="btn btn-success" role="button">Voltar</a>
          </form>

    </main>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

  
       </body>
       </html>
       
       
                          
