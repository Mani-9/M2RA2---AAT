<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Reservacion</title>
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
                        <a class="nav-link text-white" href="<?= base_url('/')?>"><i class="bi bi-buildings"></i>
                            Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_reservaciones')?>"><i
                                class="bi bi-people-fill"></i>
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
    <main class="container p-4 d-flex justify-content-center ">
        <div class="card mb-3 " style="max-width: 540px;">
            <div class="card-header text-center">
                <h2>Nueva Reservacion</h2>
            </div>
            <div class="card-body">
                <form action="agregar_reservacion" method="post">
                    <div class="mb-3">
                        <label for="numIdReservaciones" class="form-label"><i class="bi bi-calendar4-week"></i> ID
                            Reservaciones </label>
                        <input type="number" id="numIdReservaciones" name="numIdReservaciones" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numFecha" class="form-label"><i class="bi bi-calendar-event"></i> Fecha</label>
                        <input type="date" id="numFecha" name="numFecha" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numIdCliente" class="form-label"><i class="bi bi-file-person-fill"></i> ID
                            Cliente</label>
                        <input type="text" id="numIdCliente" name="numIdCliente" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numIdHotel" class="form-label"><i class="bi bi-buildings"></i> Id Hotel</label>
                        <input type="number" id="numIdHotel" name="numIdHotel" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescipcion" class="form-label"><i class="bi bi-card-text"></i>
                            Descripcion</label>
                        <input type="text" id="txtDescipcion" name="txtDescipcion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="numIdUsuario" class="form-label"><i class="bi bi-file-person-fill"></i> ID
                            Usuario</label>
                        <input type="num" id="numIdUsuario" name="numIdUsuario" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>