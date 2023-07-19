@extends('layout.mainpuro')
  
@section('content')


 @yield('body') 


    <main class="container">
        <h1>Adicionar Produtos</h1>
        <form method="post" action="{{route('produtos.store')}}">
            @csrf

            <div class="mb-3">
              <label for="codigo" class="form-label">Codigo</label>
              <input type="text"  class="form-control"  name="codigo" placeholder="Codigo :">
            </div>

            <div class="mb-3">
              <label for="descricao" class="form-label">Descrição</label>
              <input type="text"  class="form-control" name="descricao"  placeholder="Descricao:">
            </div>
               
            <div class="mb-3">
              <label for="preco" class="form-label">Preço</label>
              <input type="text"  class="form-control" name="preco" placeholder="Preço:">
            </div>

           <div class="mb-3">
              <label for="imposto" class="form-label">Imposto</label>
              <input type="text" class="form-control" name="imposto" placeholder="Imposto :">
            </div>  
   
            <button type="submit" class="btn btn-primary">Cadastrar</button>   
            <a href="/" class="btn btn-success" role="button">Voltar</a>
            
          </form>
    </main>
 
   @endsection 
