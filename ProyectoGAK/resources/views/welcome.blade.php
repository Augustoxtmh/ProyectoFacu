<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="Stylesheet" href="{{ asset('css/index.css') }}">

    </head>
    <body>
        <section>
            <div class="form-box">
                <div>
                    <form action="Pedidos">
                        <h2>Venecia Modas</h2>
                        <div class="inputbox">
                            <ion-icon name="person-outline"></ion-icon>
                            <input type="text" id="User" required>
                            <label for="User">Usuario</label>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" id="pass" required>
                            <label for="pass">Contraseña</label>
                        </div>
                        <button>Ingresar</button>
                    </form>
                </div>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>



<script>

  function ejec(){
    Swal.fire({
      title: 'Cerrar sesion',
      text: "Seguro que quiere cerrar sesion?",
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: 'Si',
      denyButtonText: `No`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
    })
  }

</script>