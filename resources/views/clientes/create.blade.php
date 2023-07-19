<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">



    <title>Cadastrar Clientes</title>
</head>

<body style="background-color: rgb(82, 147, 167)">
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
  
  <main class="container responsive" >

        <h1>AdCicionar Clientes</h1>

                  
              @if ($errors->any())
                   @foreach ($errors->all() as $error)   
                   @endforeach   
                           <div class="alert alert-danger">
                               <strong>{{ $error }}</strong> 
                           </div>  
                     </ul>
              @endif 

{{--  @if ($errors->any())
 @foreach ($errors->all() as $error)   
            
         <div class="alert alert-danger">
             <strong>{{ $error }}</strong> 
         </div>
   @endforeach  
   </ul>
@endif  --}}
<div class="container" style="background-color:rgba(145, 145, 145, 0.993)">
        <form method="post" action="{{route('clientes.store')}}">
            @csrf

            <div class="mb-3 "  style="width: 30%">
             <b> <label for="codigocliente" class="form-label">Codigocliente</label></b>
              <input type="text"  class="form-control" name="codigocliente" placeholder="Codigo Cliente:" value="{{ old('codigocliente')}}">
            </div>

            <div class="mb-3"style="width: 40%">
              <b>   <label for="nome" class="form-label">Nome</label></b>
              <input type="text" name="nome" class="form-control"  placeholder="Nome:" value="{{ old('nome')}}">
            </div>

            <div class="mb-3" style="width: 30%">
              <b>  <label for="nome" class="form-label">Pessoa</label><br></b>
            <input type="radio" name="pessoa" value="J" {{ old('pessoa') == 'J' ? 'checked' : '' }} > 
            <b>  <label for="pessoa">Pessoa Jurídica</label><br></b>

            <input type="radio" name="pessoa" value="F" {{ old('pessoa') == 'F' ? 'checked' : '' }}> 
            <b>   <label for="pessoa">Pessoa Física</label><br></b>

            <input type="radio" name="pessoa" value="O" {{ old('pessoa') == 'O' ? 'checked' : '' }}>
            <b>  <label for="pessoa">Outros</label></b>
             </div>

            <div class="mb-3" style="width: 30%">
              <b>   <label for="cnpj" class="form-label">CNPJ</label></b>
              <input type="text" name="cnpj" class="form-control" placeholder="CNPJ:" value="{{ old('cnpj')}}">
            </div>
            
           <b>   <label for="estado"  >Estado</label></b>
            <select style="width: 10%" id="estado" name="estado">
              <option value="SP">SP</option>
              <option value="PB">MG </option>
              <option value="PB">SC</option>
              <option value="RJ">RJ</option>
              <option value="PB">PB</option>
            </select>
            <br>     <br>

            <div class="mb-3"  style="width: 30%" >
              <b>   <label for="data_nascimento" class="form-label">Data De Nascimento</label></b>
              <input type="date" name="data_nascimento" class="form-control" placeholder="Data de Nascimento:" value="{{ old('data_nascimento')}}">
            </div>
      
         
            <button type="submit" class="btn btn-primary">Cadastrar</button>   
            <a href="/" class="btn btn-success" role="button">Voltar</a>
            
          </form>
   </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   <script src="js/script.js"></script>
   
     
          </body>
          </html>
          
          
                             








{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <main class="container">
        <h1>Adicionar</h1>
        <form method="post" action="{{route('user.store')}}">
            @csrf


            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text"  class="form-control" name="name" id="name" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>

            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
          </form>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html> --}}
