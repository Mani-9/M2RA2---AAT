<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/diseno.css')?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>
    <header>
        <div class="collapse " id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="colornav2 p-4">
                <ul class=" nav ">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_hoteles')?>"><i
                                class="bi bi-buildings"></i> Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_clientes')?>"><i
                                class="bi bi-people-fill"></i>
                            Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_reservaciones')?>"><i
                                class="bi bi-person-rolodex"></i>
                            Reservaciones</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="navbar colornav">
            <div class="container-fluid >
                <div class=" d-flex justify-content-between align-items-center w-100">
                <p class="mb-0 text-white"><span class="material-symbols-outlined">
                        sailing
                    </span> M2RA2 - AAT BASE DE DATOS HOTEL</p>
                <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            </div>
        </nav>
    </header>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>