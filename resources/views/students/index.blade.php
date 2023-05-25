<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/snippets.css') }}">
    <title>Estudiantes</title>
</head>
<body class="bg-student vh-100">
    <div class="container-fluid">
        <div class="row mt-5">
            {{-- Menu --}}
            <div class="col-3 p-0 m-0">
                <nav class="navbar navbar-expand-lg bg-body-tertiary p-0">
                    <div class="container-fluid d-flex flex-column align-items-start py-2 bg-light shadow border border-dark">
                        <a class="navbar-brand fw-bold" href="#">MENU</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link link-bg-hover fw-bold ps-0" aria-current="page" href="#">INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-bg-hover fw-bold ps-0" href="#">PROPUESTAS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-bg-hover fw-bold ps-0" href="#">SUBIDA DOCUMENTACIÓN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-bg-hover fw-bold ps-0">DOCUMENTOS SUBIDOS</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            {{-- Data --}}
            <div class="col-9 d-flex flex-column">
                <div class="bg-light px-3 py-2 mb-3 shadow border border-dark">
                    <h3>Perfil del Estudiante</h3>
                </div>
                
                <div class="bg-light px-3 py-2 shadow border border-dark">
                    <h3>Datos del Estudiante</h3>
                    <hr>
                    <p>Rut:<br>Nombre:<br>Apellido:<br>Correo Institucional:
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>