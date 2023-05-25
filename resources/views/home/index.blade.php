<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Inicio</title>
</head>
<body class="bg-warning">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg" style="background:#614656;">
                <div class="container">
                    <a href="#" class="navbar-brand text-light">
                        <img src="{{ asset('img/woo.png') }}" alt="Woo" width="50">
                        Yuni
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link link-light" aria-current="page" href="#">Opción 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-light" href="#">Opción 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-light" href="#">Opción 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-light" href="#">Iniciar sesión</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>