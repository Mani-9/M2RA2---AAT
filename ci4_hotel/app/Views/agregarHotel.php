<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Hotel</title>
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
                        <a class="nav-link text-white" href="<?= base_url('ver_hoteles')?>"><i
                                class="bi bi-people-fill"></i>
                            Hoteles</a>
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
        <div class="col-12 col-md-6">
            <div class="card mb-3 mod-form">
                <div class="card-header text-center">
                    <h2>Nuevo Hotel</h2>
                </div>
                    <div class="card-body">
                        <form action="<?= base_url('agregar_hotel')?>"   method="post">
                            <div class="mb-3">
                                <label for="numIdHotel" class="form-label"><i class="bi bi-buildings"></i> ID Hotel</label>
                                <input type="number" id="numIdHotel" name="numIdHotel" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtNombre" class="form-label"><i class="bi bi-building"></i> Nombre</label>
                                <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtCorreoElectronico" class="form-label"><i class="bi bi-envelope-at"></i>
                                    Correo electrónico</label>
                                <input type="email" id="txtCorreoElectronico" name="txtCorreoElectronico"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="numTelefono" class="form-label"><i class="bi bi-telephone-inbound-fill"></i>
                                    Teléfono</label>
                                <input type="number" id="numTelefono" name="numTelefono" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="txtDireccion" class="form-label"><i class="bi bi-signpost-split"></i>
                                    Dirección</label>
                                <input type="text" id="txtDireccion" name="txtDireccion" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="numCiudad" class="form-label"><i class="bi bi-compass"></i> ID Ciudad</label>
                                <input type="number" id="numCiudad" name="numCiudad" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="numCategoria" class="form-label"><i class="bi bi-tags"></i> ID Categoría</label>
                                <input type="number" id="numCategoria" name="numCategoria" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="numUsuario" class="form-label"><i class="bi bi-person-badge-fill"></i> ID
                                    Usuario</label>
                                <input type="number" id="numUsuario" name="numUsuario" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control">
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