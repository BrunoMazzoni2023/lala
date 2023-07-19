@extends('layout.main')
  
@section('content')


  @yield('body')

    <main class="container">
        <h1>Adicionar JOGOS</h1>
      <form action="{{route('jogos-store')}}" method="POST">
            @csrf

            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text"  class="form-control" name="nome"placeholder="Digite um nome" >
            </div>

            <div class="form-group">
              <label for="categoria">categoria</label>
              <input type="text"  class="form-control" name="categoria"placeholder="Digite uma categoria" >
            </div>

            <div class="form-group">
              <label for="ano_criacao">Ano</label>
              <input type="text"  class="form-control" name="ano_criacao"placeholder="Digite um Ano" >
            </div>

            <div class="form-group">
              <label for="valor">Valor</label>
              <input type="number"  class="form-control" name="valor"placeholder="Digite umValor" >
            </div>

            <button type="submit"  name="submit" class="btn btn-primary">ADICIONAR</button>
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
