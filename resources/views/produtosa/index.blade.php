@extends('layout.mainpuro')
  
@section('content')


 @yield('body') 


    <main class="container" style="margin-top:20px ">
   
        <a  type="button" href="{{route('produtos.create')}}" class="btn btn-primary" > NOVO Produto</a>
        <a style="margin-left: 20px" href="/" class="btn btn-success">Voltar</a> 
      
    
      <div class="container" style="margin-top: 100px;">
      <h1 style="color: blue" > produtos Início  </h1>

        <table class="table" >
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Codigo</th>
                <th scope="col">Descrição</th>
                 <th scope="col">Preço</th>
                <th scope="col">Imposto</th>
                <th scope="col">Ver</th>
                <th scope="col">Editar</th>
                 <th scope="col">Deletar</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($produtos as $produto)
              <tr>
                <th scope="row">{{$produto->id}}</th>
                <td>{{$produto->codigo}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->preco}}</td>
                <td>{{$produto->imposto}}</td>

                <td>
                    <a type="button" href="{{route('produtos.show', $clientes->id)}}" class="btn btn-success">VER </a>
                </td>
                <td>
                    <a type="button" href="{{route('produtos.edit', $produto->id)}}" class="btn btn-warning">EDITAR </a>
                </td>
                <td>
            <form action="{{route('produtos.destroy', $produto->id)}}" method="post">
                @method('delete')
                @csrf
                <button type="submit"  class="btn btn-danger">DELETAR </a>
            </form>
                </td>
              </tr>

        @endforeach
            </tbody>
          </table>
        </div>
    </main>

    @endsection