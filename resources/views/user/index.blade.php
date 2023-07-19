<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">


    <title>Index Users</title>
</head>


    <main class="container" style="margin-top:20px ">
   
        <a  type="button" href="{{route('user.create')}}" class="btn btn-primary" > NOVO USUARIO</a>
        <a style="margin-left: 20px" href="/" class="btn btn-success">Voltar</a> 
      
    
      <div class="container" style="margin-top: 100px;">
      <h1 style="color: blue" > Usuários Início  </h1>

        <table class="table" >
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Botao</th>
                <th scope="col">Editar</th>
                 <th scope="col">Deletar</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($usuarios as $user )
              <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a type="button" href="{{route('user.show', $user->id)}}" class="btn btn-success">VER </a>
                </td>
                <td>
                    <a type="button" href="{{route('user.edit', $user->id)}}" class="btn btn-warning">EDITAR </a>
                </td>
                <td>
            <form action="{{route('user.destroy', $user->id)}}" method="post">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>


</html>
