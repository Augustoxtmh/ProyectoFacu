<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="Stylesheet" href="{{ asset('css/inicio.css') }}">
</head>
<body>

    <header>
        <ul class="nav justify-content-left">
          <li class="nav-item my-2 mx-2">
            <a class="btn btn-danger" aria-current="page" href="{{ route('inicio') }}">Cerrar sesion</a>
          </li>
          <li class="nav-item titulo">
            <h2 class="text-center">Venecia Modas</h2>
          </li>
        </ul>
    </header>

    <section class="contenedor-2">
        <div class="col-12 col-md-6 btn-mrg" style="margin-right: 4px;">
            <a href="stock" class="btn-secondary btn col-12 btn-pding">
                Stock
            </a>
        </div>
        <div class="col-12 col-md-6 btn-mrg"  style="margin-left: 4px;">
            <a href="pedidos" class="btn-secondary btn col-12 btn-pding">
                Pedidos
            </a>
        </div>
    </section>
    
    <section class="contenedor">
        <div class="col-12 btn-mrg" style="margin: 10px 0px 10px 0px;">
            <a href="facturas" class="btn-secondary btn col-12 btn-pding">
                Facturas
            </a>
        </div>
        <div class="col-12 btn-mrg">
            <a href="" class="btn-secondary btn col-12  ">
                Gestionar usuarios
            </a>
        </div>
    </section>
    

</body>
</html>
