<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= base_url('css/diseno.css')?>">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">

</head>

<body>
    <header>
        <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
            <div class="colornav2 p-4">
                <ul class=" nav ">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('/')?>"><i class="bi bi-buildings"></i>
                            Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_hoteles')?>"><i
                                class="bi bi-people-fill"></i>
                            Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?= base_url('ver_clientes')?>"><i
                                class="bi bi-person-rolodex"></i>
                            Clientes</a>
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
    <main class="p-4">
        <div class="d-flex justify-content-center ">
            <h1 class="p-2 col-12 col-md-6 col-lg-4 text-center">Reservaciones</h1>
        </div>
        <div class="d-flex justify-content-end">
            <a href="<?php echo base_url('agregar_reservacion'); ?>"
                class="btn btn-dark col-12 col-md-6 col-lg-4 mt-2 m-2 d-flex align-items-center">
                <i class="bi bi-house-add me-2"></i>
                <h4 class="mb-0">Agregar nueva reservacion</h4>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-success table-striped border border-dark">
                <thead class="table-dark ">
                    <tr class="text-center">
                        <th><i class="bi bi-calendar4-week"></i> ID Reservaciones: </th>
                        <th><i class="bi bi-calendar-event"></i> fecha: </th>
                        <th><i class="bi bi-file-person-fill"></i> ID Cliente: </th>
                        <th><i class="bi bi-buildings"></i> ID Hotel: </th>
                        <th><i class="bi bi-card-text"></i> Descripcion </th>
                        <th><i class="bi bi-file-person-fill"></i> ID Usuario: </th>
                        <th><i class="bi bi-pencil"></i> / <i class="bi bi-trash3-fill"></i> Accion: </th>
                    </tr>
                </thead>
                <?php
            foreach($datos as $reservaciones ):
        ?>
                <tbody class="text-center">
                    <tr>
                        <td>
                            <?php echo $reservaciones['reservacion_id'] ?>
                        </td>
                        <td>
                            <?php echo $reservaciones['fecha'] ?>
                        </td>

                        <td>
                            <?php echo $reservaciones['cliente_id'] ?>
                        </td>
                        <td>
                            <?php echo $reservaciones['hotel_id'] ?>
                        </td>
                        <td>
                            <?php echo $reservaciones['descripcion'] ?>
                        </td>
                        <td>
                            <?php echo $reservaciones['usuario_id'] ?>
                        </td>
                        <td>
                            <a href="<?= base_url('buscar_reservacion/').$reservaciones['reservacion_id']?>"
                                class="btn btn-info"><i class="bi bi-pencil-square"></i>Editar</a>
                            <a href="<?= base_url('eliminar_reservacion/').$reservaciones['reservacion_id']?>"
                                class="btn btn-danger"><i class="bi bi-trash-fill"></i>Eliminar</a>
                        </td>
                    </tr>
                </tbody>
                <?php
        endforeach;
        ?>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>