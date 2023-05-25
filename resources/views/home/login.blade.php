<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Inicio de sesión</title>
</head>
<body class="vh-100">
    <div class="container-fluid h-100 d-flex flex-column justify-content-center align-self-center">
        <div class="row justify-content-center align-self-center w-50">
            <div class="col-12">
                <h1 class="text-center">Intranet Yuni</h1>
                <div class="card">
                    <div class="card-body d-flex flex-column align-items-center p-4">
                        <h3 class="card-title">Entrar</h3>
                        <div class="mb-3 w-100">
                            <input class="form-control" type="text" placeholder="Usuario">
                        </div>
                        <div class="mb-3 w-100">
                            <input class="form-control" type="text" placeholder="Contraseña">
                        </div>
                        <div class="mb-3 d-grid gap-2 w-100">
                            <button class="btn btn-dark">Entrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>