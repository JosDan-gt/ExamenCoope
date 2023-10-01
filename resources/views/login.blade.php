<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h1>Inicio de Sesion!</h1>

    <form action="{{route('iniciar-sesion')}}" method="POST">
        @csrf

        {{-- <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">@</span>
          <input type="text" class="form-control" placeholder="user_name" aria-label="user_name"
              aria-describedby="basic-addon1" name="user_name">

      </div> --}}

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="correo" aria-label="correo"
                aria-describedby="basic-addon2" name="correo">
            <span class="input-group-text" id="basic-addon2">@example.com</span>
        </div>


        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="contrasena">

        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div>
          <p>No tienes Cuenta? <a href="{{ route('registro') }}">Registrate</a></p>
        </div>
        
        <button type="submit" class="btn btn-primary">Acceder</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
