<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Pagina</title>
</head>
<body class="container">
<div>
  <br>
  <center><img src="https://i.pinimg.com/736x/be/51/03/be51036d0efa65a61fc1fcf3c507d2ac.jpg" alt="Aesthetic" width="300" ></center>
<br>
</div>

  
<ul class="nav justify-content-center">
  <li class="nav-item">
  <div class="container-fluid">

        <li class="nav-item">
        <span class="navbar-brand mb-0 h1">
        <p class="fw-bold">
          <a class="nav-link" style="color: #1A021B" href="{{ route('lista_usuarios')}}"> Usuarios </a>
</p>
        </li>
        <li class="nav-item">
        <span class="navbar-brand mb-0 h1">
        <p class="fw-bold">
          <a class="nav-link" style="color: #1A021B" href="{{ route('lista_tipos')}}"> Tipos </a>
</p>
        </li>
        <li class="nav-item">
        <span class="navbar-brand mb-0 h1">
        <p class="fw-bold">
          <a class="nav-link" style="color: #1A021B" href="{{ route('lista_tiendas')}}"> Tiendas </a>
</p>
        </li>
        <li class="nav-item">
        <span class="navbar-brand mb-0 h1">
        <p class="fw-bold">
          <a class="nav-link" style="color: #1A021B" href="{{ route('lista_productos')}}"> Productos </a>
</p>
        </li>
      </ul>
      </div>

  </div>

</nav>
</div>
<br><br>




@yield('content')  




</body>
</html>