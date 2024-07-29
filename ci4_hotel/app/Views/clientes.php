<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
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
                        <a class="nav-link text-white" href="<?= base_url('ver_reservaciones')?>"><i
                                class="bi bi-person-rolodex"></i>
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
    <main class="p-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center contentmod">
                    <h1 class="display-4 ">Clientes</h1>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end flex-wrap">
            <a href="<?php echo base_url('agregar_cliente'); ?>"
                class="btn btn-dark  mt-2 m-2 d-flex align-items-center ">
                <h4 class="mb-0"><i class="bi bi-house-add me-2"></i> Agregar nuevo Cliente</h4>
            </a>
            <div class="dropdown">
                <a class="btn btn-dark  mt-2 m-2 d-flex align-items-center dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-file-person-fill me-2"></i>
                    <h4 class="mb-0">Ordenar Clientes</h4>
                </a>
                <ul class="dropdown-menu">
                    <a class="btn mt-2 m-2 d-flex align-items-center "
                        href="<?php echo base_url('ordenar_id_acendente') ?>">
                        <h4 class="mb-0"><i class="bi bi-arrow-up-circle"></i> Acendente</h4>
                    </a><a class="btn   mt-2 m-2 d-flex align-items-center "
                        href="<?php echo base_url('ordenar_id_decendente') ?>">
                        <h4 class="mb-0"><i class="bi bi-arrow-down-circle"></i> Decendente</h4>
                    </a>
                </ul>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-success table-striped border border-dark">
                <thead class="table-dark ">
                    <tr class="text-center">
                        <th><i class="bi bi-file-person-fill"></i> ID Cliente: </th>
                        <th><i class="bi bi-person-vcard"></i> Nombre Completo: </th>
                        <th><i class="bi bi-bank"></i> Nit: </th>
                        <th><i class="bi bi-telephone"></i> Telefono: </th>
                        <th><i class="bi bi-envelope-at-fill"></i> Correo electronico: </th>
                        <th><i class="bi bi-signpost-split"></i> Direccion: </th>
                        <th><i class="bi bi-file-lock2"></i> Contraseña: </th>
                        <th><i class="bi bi-pencil"></i> / <i class="bi bi-trash3-fill"></i> Editar/Eliminar: </th>
                    </tr>
                </thead>
                <?php
            foreach($datos as $clientes ):
        ?>
                <tbody class="text-center">
                    <tr>
                        <td>
                            <?php echo $clientes['cliente_id'] ?>
                        </td>
                        <td>
                            <?php echo $clientes['nombre'] ." " .$clientes['apellido']?>
                        </td>

                        <td>
                            <?php echo $clientes['nit'] ?>
                        </td>
                        <td>
                            <?php echo $clientes['telefono'] ?>
                        </td>
                        <td>
                            <?php echo $clientes['correo_electronico'] ?>
                        </td>
                        <td>
                            <?php echo $clientes['direccion'] ?>
                        </td>
                        <td>
                            <?php echo $clientes['contrasenia'] ?>
                        </td>
                        <td class="text-center">
                            <a href="<?= base_url('buscar_cliente/').$clientes['cliente_id']?>" class="btn btn-info"><i
                                    class="bi bi-pencil-square"></i></a>
                            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                data-hotel-id="<?= $clientes['cliente_id'] ?>">
                                <i class="bi bi-trash-fill"></i> 
                            </a>
                            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estás seguro de que deseas eliminar este Cliente?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <a href="<?= base_url('eliminar_cliente/').$clientes['cliente_id']?>"
                                                class="btn btn-danger"><i class="bi bi-trash-fill"></i>Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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