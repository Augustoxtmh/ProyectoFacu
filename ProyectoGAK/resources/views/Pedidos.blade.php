<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <!-- Enlace al archivo CSS -->
    <link rel="Stylesheet" href="/public/css/pedidos.css">
</head>
<body>
    <section>
        <div class="row">
            <div class="Listado">
                <ul>
                    <h2>Lista de pedidos</h2>
                    <!-- Comprobación de si la variable $pedidos está definida y no está vacía -->
                    @if(isset($pedidos) && !empty($pedidos))
                        <!-- Bucle para cada pedido en $pedidos -->
                        @foreach($pedidos as $pedido)
                            <!-- Comprobación de si la propiedad 'nombre' está definida en $pedido -->
                            @if(isset($pedido->nombre))
                                <!-- Mostrar la propiedad 'nombre' -->
                                <li>{{ $pedido->nombre }}</li>
                                <!-- Aca irian los campos de pedido que se quieren mostrar-->
                            @endif
                        @endforeach
                    @else
                        <!-- Mensaje si no hay pedidos disponibles -->
                        <li>No hay pedidos disponibles.</li>
                    @endif
                </ul>
            </div>
            <div class="Opciones">
                <h2>Opciones</h2>
                <form action="{{ route('agregar-pedido') }}" method="post">
                    @csrf
                    <label for="idC">ID del cliente:</label>
                    <input type="text" name="idC" required>
                    <label for="fecha">Fecha del pedido:</label> <!-- Aca se podria poner lo del calendario que dijo kevin -->
                    <input type="date" name="fecha" required>
                    <label for="estado">Estado del pedido</label>
                    <input type="text" name="estado" required>
                    <button type="submit">Agregar Pedido</button>
                </form>

                <form action="{{ route('borrar-pedido') }}" method="post">
                    @csrf
                    <label for="id">ID del pedido a Borrar:</label>
                    <input type="number" name="id" required>
                    <button type="submit">Borrar pedido</button>
                </form>

                <form action="{{ route('modificar-pedido')}}" method="post">
                    @csrf
                    <label for="idM">ID del pedido a modificar</label>
                    <input type="numer" name="idM" required>
                    <button type="submit">Modificar pedido</button> <!-- Aca faltaria fijarse si dejamos que modifique solo el estado del pedido -->
                </form>
            </div>
        </div>
    </section>
</body>
</html>


/*Faltaria crear las migraciones, rutas y archivos de controlador para agregar, borrar y modificar para esto y para stock