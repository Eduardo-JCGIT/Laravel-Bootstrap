

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="icon" href="img/icon/gatito pc.png">
    
    <title>Boostrap 1</title>
</head>
<body>

    <header>
        <div class="jumbotron encabezado">
            <img src="img/icon/icon2.png" alt="">
            <h1 class="display-4 textoencabezado">Eduardo Jiménez Cruz</h1>
            <p class="lead textoencabezado">Estudiante de ingeniería en programación y web master</p>
          </div>
    
          <nav class="navbar navbar-expand-lg navbar-light bg-light" >
              <img src="img/icon/icon1.png" alt="">
            <a class="navbar-brand" href="#">EJC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="web">Web</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    Mas
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="tecnologia">Tecnologia</a>
                    <a class="dropdown-item" href="#">Analisis</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="servicios">Servicios</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Productos</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-primary" type="submit">Buscar</button>
              </form>
            </div>
          </nav>
    </header>

    @yield('index')
    @yield('service')
    @yield('web')

    <footer>
        <div class="jumbotron jumbotron-fluid piepagina">
          <div class="container">
            <h1 class="display-4">&copy; Eduardo Jiménez Cruz</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            <p>
              <img src="../img/icon/twitter.png" alt="">
              <img src="../img/icon/whatsapp.png" alt="">
              <img src="../img/icon/youtube.png" alt="">
            </p>
          </div>
        </div>
      </footer>

</body>
</html>
