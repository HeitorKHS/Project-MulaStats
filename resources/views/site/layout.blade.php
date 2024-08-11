<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    
    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content'>

      @foreach ($categoriasMenu as $categoriaM)
        <li><a href="{{ route('site/categoria', $categoriaM->id)}}">{{$categoriaM->nome}}</a></li>
      @endforeach
          
    </ul>

    <nav class="black">
        <div class="nav-wrapper container">
          <a href="#" class="brand-logo center" style="margin-top: -5px;"><img  src="{{asset('img/logo.png')}}"></a>
          <ul id="nav-mobile" class="left">
            <li><a href="#">Home</a></li>
            <li><a href="#">Players</a></li>  
            <li><a href="#">Map Pool</a></li>    
          </ul>
        </div>
      </nav>

    @yield('content')


   

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>