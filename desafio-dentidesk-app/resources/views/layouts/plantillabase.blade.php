<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>DentiDesk</title>
  </head>

  <body>
    
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">DentiDesk</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav me-4">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="/">Principal</a>
                    </li>
                    <li class="nav-item active me-4 dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Acciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/ingresos/create">Agregar Ingreso</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/egresos/create">Agregar Egreso</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="/resultado">Ganancias</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <h1 class="text-center mt-2"> Administrador de Ingresos y Egresos</h1>

        <div class="col-md-12">

            @yield('contenido')

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </div>
  </body>

</html>