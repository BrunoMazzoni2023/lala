@extends('layout.mainpuro')
  
@section('content')


 @yield('body')  



    <main class="container mt-5">
      <div class="row">
        <div class="col-sm-6">
          <h1>Index</h1>
        </div>
<div class="col-sm-6">
  <a href="{{ route('jogos-create') }}" class="btn btn-success">Novo jogo</a>
</div>
      </div>
    
    
            NOVO JOGO
        </a>
        <table class="table mt-3">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">categoria</th>
                <th scope="col">ano de criacao</th>
                <th scope="col">valor</th>
                <th scope="col">Botao</th>
                <th scope="col">Editar</th>
                 <th scope="col">Deletar</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($jogos as $jogo )
              <tr>
                <th scope="row">{{$jogo->id}}</th>
                <td>{{$jogo->nome}}</td>
                <td>{{$jogo ->categoria}}</td>
                <td>{{$jogo->year}}</td>
                <td>{{$jogo->valor}}</td>                 
                <td>
             
            </form>
                </td>
              </tr>

        @endforeach
            </tbody>
          </table>
    </main>

 @endsection