@extends('layout.mainpuro')
  
@section('content')


 @yield('body') 


    <main class="container">
        <h1>Adicionar Clientes</h1>
        <form method="post" action="{{route('clientes.store')}}">
            @csrf

            <div class="mb-3">
              <label for="codigocliente" class="form-label">Codigocliente</label>
              <input type="text"  class="form-control"  name="codigocliente" placeholder="Codigo Cliente:">
            </div>

            <div class="mb-3">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" name="nome" class="form-control"  placeholder="Nome:">
            </div>
             
            <input type="radio" name="pessoa" value="J" {{ old('pessoa') == 'J' ? 'checked' : '' }}> 
            <label for="pessoa">Pessoa Jurídica</label><br>

            <input type="radio" id="pessoa" name="pessoa" value="F">
            <label for="pessoa">Física</label><br>

            <input type="radio" id="pessoa" name="pessoa" value="O">
            <label for="pessoa">Outros</label>
            
            <div class="mb-3">
              <label for="cnpj" class="form-label">CNPJ</label>
              <input type="text" name="cnpj" class="form-control" placeholder="CNPJ:">
            </div>

           <div class="mb-3">
              <label for="estado" class="form-label">Estado</label>
              <input type="text" name="estado" class="form-control" placeholder="Estado:">
            </div>  

            <div class="mb-3">
              <label for="data_nascimento" class="form-label">Data De Nascimento</label>
              <input type="date" name="data_nascimento" class="form-control" placeholder="Data de Nascimento:">
            </div>
 
            
            <button type="submit" class="btn btn-primary">Cadastrar</button>   
            <a href="/" class="btn btn-success" role="button">Voltar</a>
            
          </form>
    </main>
 
   @endsection 










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
