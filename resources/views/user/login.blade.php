<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">



    <title>Cadastrar Usuários</title>
</head>

    <main class="container">
        <h1>Adicionar</h1>
        <form method="post" action="{{route('login.store')}}">
            @csrf

            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">SENHA</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Logar</button>   
            <a href="/" class="btn btn-success" role="button">Voltar</a>
            
          </form>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    
      
           </body>
           </html>
           

