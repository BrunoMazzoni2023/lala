<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">

</head>
<body >
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
  
 <main class="container" >
    <h1>Adicionar Produto</h1>

    @if ($errors->any())

    <ul class="errors">
        @foreach ($errors->all() as $error)
              <li class="error"> {{ $error }}</li>
        @endforeach  

    </ul>
    @endif


    <form action="{{ route('produtos.store', $cliente->id) }}" method="post">
        @csrf
        <div class="mb-3" style="width: 7%">
            <label for="codigo"  class="form-label">Codigo</label>
            <input type="text"  class="form-control"  name="codigo" placeholder="Codigo :">
          </div>
        
          <div class="mb-3" style="width: 50%">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text"  class="form-control" name="descricao"  placeholder="Descricao:">
          </div>
             
          <div class="mb-3"style="width: 7%">
            <label for="preco" class="form-label">Preço</label>
            <input type="text"  class="form-control" name="preco" placeholder="Preço:">
          </div>
        
          <div class="mb-3"style="width: 8%">
            <label for="imposto" class="form-label">Imposto</label>
            <input type="text" class="form-control" name="imposto" placeholder="Imposto :">
          </div>  
             
            <button type="submit" class="btn btn-primary">Cadastrar</button>   
            <a href="/" class="btn btn-success" role="button">Voltar</a>
        {{-- 
        <input type="text" name="name" value="{{ old('name')}}" placeholder="Nome:">    
        <input type="email" name="email" value="{{ old('email')}}" placeholder="E-mail:">    
        <input type="password" name="password" placeholder="Senha:">     --}}
        
        </form>  
      </main>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
      
        
             </body>
             </html>
             
             
                          



