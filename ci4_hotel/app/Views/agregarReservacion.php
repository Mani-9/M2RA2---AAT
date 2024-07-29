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
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

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
            <div class="container-fluid ">
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
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <main class="container p-4 d-flex justify-content-center">
        <div class="col-12 col-md-7">
            <div class="card mb-3 mod-form">
                <div class="card-header text-center">
                    <h2>Nueva Reservación</h2>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('agregar_reservacion') ?>" method="post">
                        <div class="row g-3 mb-3">
                            <div class="col-md-3 text-center">
                                <label for="numIdReservaciones" class="form-label">
                                    <i class="bi bi-calendar4-week"></i> ID Reservaciones
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" id="numIdReservaciones" name="numIdReservaciones"
                                    class="form-control" value="<?= set_value('numIdReservaciones'); ?>">
                                <div class="text-danger"><?= validation_show_error('numIdReservaciones'); ?></div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-3 text-center">
                                <label for="numFecha" class="form-label">
                                    <i class="bi bi-calendar-event"></i> Fecha
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input type="date" id="numFecha" name="numFecha" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-3 text-center">
                                <label for="numIdCliente" class="form-label">
                                    <i class="bi bi-file-person-fill"></i> ID Cliente
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="numIdCliente" name="numIdCliente" class="form-control"
                                    value="<?= set_value('numIdCliente'); ?>">
                                <div class="text-danger"><?= validation_show_error('numIdCliente'); ?></div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-3 text-center">
                                <label for="numIdHotel" class="form-label">
                                    <i class="bi bi-buildings"></i> ID Hotel
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" id="numIdHotel" name="numIdHotel" class="form-control"
                                    value="<?= set_value('numIdHotel'); ?>">
                                <div class="text-danger"><?= validation_show_error('numIdHotel'); ?></div>
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-3 text-center">
                                <label for="txtDescipcion" class="form-label">
                                    <i class="bi bi-card-text"></i> Descripción
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" id="txtDescipcion" name="txtDescipcion" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 mb-3">
                            <div class="col-md-3 text-center">
                                <label for="numIdUsuario" class="form-label">
                                    <i class="bi bi-file-person-fill"></i> ID Usuario
                                </label>
                            </div>
                            <div class="col-md-9">
                                <input type="number" id="numIdUsuario" name="numIdUsuario" class="form-control"
                                    value="<?= set_value('numIdUsuario'); ?>">
                                <div class="text-danger"><?= validation_show_error('numIdUsuario'); ?></div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center btn-grad">
                            <button type="submit" id="btnGuardarReservaciones" name="btnGuardarReservaciones"
                                class="btn btn-light btn-block my-2">
                                <i class="bi bi-building-add"></i> Agregar Reservación
                            </button>
                            <button type="reset" id="btnLimpiarFormulario" name="btnLimpiarFormulario"
                                class="btn btn-light btn-block my-2">
                                <i class="bi bi-x-circle"></i> Limpiar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>