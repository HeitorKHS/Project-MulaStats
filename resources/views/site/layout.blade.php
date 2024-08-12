<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="#90caf9 blue lighten-3">

    <!-- Dropdown Structure -->
    <ul id='dropdown1' class='dropdown-content black'>
        @foreach ($playersMenu as $playerM)
            <li><a class="white-text" href="">{{$playerM->name}}</a></li>
        @endforeach
    </ul>

    <nav class="black">
      <div class="nav-wrapper container">
        <img  class="brand-logo center" style="height: 64px;" src="{{asset('img/logo.png')}}">
        <ul id="nav-mobile" class="left">
          <li><a href="{{route('site/index')}}">Home</a></li>
          <li><a href="#" class="dropdown-trigger" data-target="dropdown1" >Players<i class="material-icons right">expand_more</i></a></li>  
          <li><a href="#">Map Pool</a></li>    
        </ul>
      </div>
    </nav>

    @yield('content')


   

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
      /* Dropdown */
      var elemDrop = document.querySelectorAll('.dropdown-trigger');

      var instanceDrop = M.Dropdown.init(elemDrop, {
                coverTrigger:false,
                constrainWidth:false 
      });
    </script>

  </body>
</html>