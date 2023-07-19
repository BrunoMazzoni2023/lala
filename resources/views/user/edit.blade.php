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

 <a style="margin-left: 20px" href="/usuarios" class="btn btn-success">Voltar</a>
 <h1 style="color: blue" > Usuários Editar  </h1>
 
<div style="background-color: rgb(86, 102, 80)">
 <main class="container" style="margin-top:20px" >

  



<div class="container" style="margin-top: 100px;">
   
        <form method="post" action="{{route('user.update', $user->id)}}">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="name" class="form-label">Nome</label>
              <input type="text" value="{{$user->name}}" class="form-control" name="name" id="name" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" value="{{$user->email}}" class="form-control" id="email">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">SENHA</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>

            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
          </form>

    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>


</html>
