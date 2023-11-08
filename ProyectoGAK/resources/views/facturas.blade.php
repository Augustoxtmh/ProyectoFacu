<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Facturas</title>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="Stylesheet" href="{{ asset('css/facturas.css') }}">
    </head>
    <body>

        <header>
            <ul class="nav justify-content-left">
              <li class="nav-item my-2 mx-2">
                <a class="btn btn-success" aria-current="page" href="{{ route('inicio') }}">Volver</a>
              </li>
              <li class="nav-item titulo">
                <h2 class="text-center">Venecia Modas</h2>
              </li>
            </ul>
        </header>

        <div id="contenedor">
          <section id="filtros">

            <h4>Tiempo</h4>
            <label for="">Hoy: </label>
            <input type="radio" name="" id="">
            <br>
            <label for="">Esta semana: </label>
            <input type="radio" name="" id="">
            <br>
            <label for="">Este mes:</label>
            <input type="radio" name="" id="">
  
            <h4 style="margin-top: 10px">Monto</h4>
            <input type="radio" name="" id="">
            <label for=""> < 10000 </label>
            <br>
            <input type="radio" name="" id="">
            <label for=""> > 10000 </label>
            
            <p>Mas opciones... pronto</p>
          </section>
  
          <section id="resultados">
            
            <table  class="table table-striped">
              <tr>
                  <th>Columna 1</th>
                  <th>Columna 2</th>
                  <th>Columna 3</th>
                  <th>Columna 4</th>
              </tr>
  
              <tr>
                  <td>resultado 1</td>
                  <td>resultado 2</td>
                  <td>resultado 3</td>
                  <td>resultado 4</td>
              </tr>

              <!--
                Hacer el foreach con los resultados

              -->
          </table>
  
          </section>
        </div>
    </body>
</html>