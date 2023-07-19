@extends('layout.mainpuro')
  
@section('content')


 @yield('body') 

 <main class="container" style="margin-top:20px ">
   
  <a  type="button" href="{{route('produtos.create')}}" class="btn btn-primary" > NOVO PRODUTO</a>
  <a style="margin-left: 20px" href="/produtos" class="btn btn-success">Voltar</a> 


<div class="container" style="margin-top: 100px;">
<div class="cor" style="color: blue" > Produtos Visualizar  

        <table class="table">
            <thead>
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
@endsection