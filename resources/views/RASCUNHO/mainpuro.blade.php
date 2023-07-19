<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  
      <div class="container-fluid">
          <a class="navbar-brand" href="/">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          </div>
        </div>
      </nav>
      <title>@yield('title')</title>
</head>

<body class='body'>



  <div class="alert alert-primary" role="alert">
  @if ($errors->any())
<ul class="errors">
 
        @foreach ($errors->all() as $error)
          @endforeach  
        
          <li class="error"> {{ $error }}</li>
     </ul>
</div>
@endif 

{{--   @if ($errors->any())

<ul class="errors">
    @foreach ($errors->all() as $error)
          <li class="error"> {{ $error }}</li>
    @endforeach  

</ul>
@endif  --}}

    <div class="cor" style="background-color: #3390EC">
<div class="container">
@yield('content')


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</div>
</body>
<div style="margin-block-start: 100%">
<footer style="color:red;" | style="margin-block-start: 100%">
  <p>BAG FPS  &copy; 2023</p>
</footer>
</div>
</html>