<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>


    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Clientes</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>



    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('Vista_empleados') }}">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Clientes
                            </a>
                        </li>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Clientes</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                            <span data-feather="calendar" class="align-text-bottom"></span>
                            This week
                        </button>
                    </div>
                </div>

                <table class="table" id="data">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cod_Asociado</th>
                            <th scope="col">id_users</th>
                            <th scope="col">nombre</th>
                            <th scope="col">apellido1</th>
                            <th scope="col">apellido2</th>
                            <th scope="col">dpi</th>
                            <th scope="col">sexo</th>
                            <th scope="col">direccion</th>
                            <th scope="col">fecha_nac</th>
                            <th scope="col">estado_civ</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>


                <div class="modal fade" id="modClientes" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="modClientesLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modClientesLabel">Actualizar Cliente</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="codasociadoMod" class="form-label">Codigo Asociado</label>
                                        <input id="codasociadoMod" class="form-control">

                                        <label for="idUserMod" class="form-label">Id Usuario</label>
                                        <input id="idUserMod" class="form-control">

                                        <label for="nombreClienteMod" class="form-label">Nombre</label>
                                        <input id="nombreClienteMod" class="form-control">

                                        <label for="apellido1Mod" class="form-label">Primer Apellido</label>
                                        <input id="apellido1Mod" class="form-control">

                                        <label for="apellido2Mod" class="form-label">Segundo Apellido</label>
                                        <input id="apellido2Mod" class="form-control">

                                        <label for="dpiMod" class="form-label">DPI</label>
                                        <input id="dpiMod" class="form-control">

                                        <label for="sexoMod" class="form-label">Sexo</label>
                                        <input id="sexoMod" class="form-control">

                                        <label for="direccionClienteMod" class="form-label">Dirección</label>
                                        <input id="direccionClienteMod" class="form-control">

                                        <label for="fechaNacMod" class="form-label">Fecha de Nacimiento</label>
                                        <input id="fechaNacMod" class="form-control">

                                        <label for="estadoCivilMod" class="form-label">Estado Civil</label>
                                        <input id="estadoCivilMod" class="form-control">

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Cerrar</button>

                                <button id="guardarClienteMod" type="button"
                                    class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="{{ asset('JS/crud.js') }}"></script>



</body>

</html>
