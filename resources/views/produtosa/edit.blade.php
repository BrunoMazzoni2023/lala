@extends('layout.mainpuro')
  
@section('content')


 @yield('body') 


 <h1 style="color: rgb(16, 16, 17)" > Clientes Editar  </h1>
 <a style="margin-left: 20px" href="/produtos" class="btn btn-success">Voltar</a>
<div style="background-color: rgb(86, 102, 80)">
 <main class="container" style="margin-top:20px" >

  



<div class="container" style="margin-top: 100px;">
     
        <form method="post" action="{{route('produtos.update', $produtos->id)}}">
            @csrf
            @method('put')

            <div class="mb-3">
              <b><label for="codigo" class="form-label">Codigo do Produto</label></b>
              <input type="number" value="{{$produtos->codigo}}" class="form-control" name="codigo" placeholder="Codigo">

            </div>
            <div class="mb-3">
              <label for="descricao" class="form-label">Descriçao</label>
              <input type="text" value="{{$produtos->descricao}}" class="form-control"  name="descricao" placeholder="Descrição">
            </div>

            <div class="mb-3">
              <label for="preco" class="form-label">Preço</label>
              <input type="number" step="0.010" value="{{$produtos->preco}}" class="form-control" name="preco" placeholder="Valor">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Imposto</label>
              <input type="number" step="0.010" value="{{$produtos->imposto}}" class="form-control" name="imposto" placeholder="Imposto" >
            </div>
    
            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
       
            
          </form>

    </main>
  </div>
</div>
@endsection
