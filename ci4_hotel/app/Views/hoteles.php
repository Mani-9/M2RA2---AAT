<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hoteles</title>
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
    <main class="p-4">
        <div class="d-flex justify-content-center ">
            <h1 class="p-2 col-12 col-md-6 col-lg-4 text-center">Hoteles</h1>
        </div>
        <div class="d-flex justify-content-end">
            <a href="<?php echo base_url('agregar_hotel'); ?>"
                class="btn btn-dark col-12 col-md-6 col-lg-4 mt-2 m-2 d-flex align-items-center">
                <i class="bi bi-house-add me-2"></i>
                <h4 class="mb-0">Agregar nuevo Hotel</h4>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-success table-striped border border-dark">
                <thead class="table-dark ">
                    <tr class="text-center">
                        <th><i class="bi bi-buildings"></i> ID Hotel: </th>
                        <th><i class="bi bi-building"></i> Nombre: </th>
                        <th><i class="bi bi-envelope-at"></i> Correo Electronico: </th>
                        <th><i class="bi bi-telephone-inbound-fill"></i> Telefono: </th>
                        <th><i class="bi bi-signpost-split"></i> Direccion: </th>
                        <th><i class="bi bi-compass"></i> ID ciudad: </th>
                        <th><i class="bi bi-tags"></i> ID categoria: </th>
                        <th><i class="bi bi-person-badge-fill"></i> ID usuario: </th>
                        <th><i class="bi bi-pencil"></i> / <i class="bi bi-trash3-fill"></i> Accion: </th>
                    </tr>
                </thead>
                <?php
            foreach($datos as $hoteles ):
        ?>
                <tbody>
                    <tr>
                        <td>
                            <?php echo $hoteles['hotel_id'] ?>
                        </td>
                        <td>
                            <?php echo $hoteles['nombre'] ?>
                        </td>
                        <td>
                            <?php echo $hoteles['correoelectronico'] ?>
                        </td>
                        <td>
                            <?php echo $hoteles['telefono'] ?>
                        </td>
                        <td>
                            <?php echo $hoteles['direccion'] ?>
                        </td>
                        <td>
                            <?php echo $hoteles['ciudad_id'] ?>
                        </td>
                        <td>
                            <?php echo $hoteles['categoria_id'] ?>
                        </td>
                        <td>
                            <?php echo $hoteles['usuario_id'] ?>
                        </td>
                        <td>
                            <a href="<?= base_url('buscar_hotel/').$hoteles['hotel_id']?>" class="btn btn-info"><i
                                    class="bi bi-pencil-square"></i>Editar</a>
                            <a href="<?= base_url('eliminar_hotel/').$hoteles['hotel_id']?>" class="btn btn-danger"><i
                                    class="bi bi-trash-fill"></i>Eliminar</a>
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