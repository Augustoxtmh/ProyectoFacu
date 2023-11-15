<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock de Productos</title>
    <link rel="Stylesheet" href="/public/css/stock.css">
</head>
<body>
    <section>
        <header>
            <a href="{{ route('login') }}" class="btn btn-primary">Salir</a>
        </header>
        <div class="row">
            <div class="Listado">
                <ul>
                    <h2>Lista de Stock</h2>
                    @foreach($stocks as $stock)
                        <li>{{ $stock->nombre }}</li>
                        <!-- Aca irian los campos de stock que se quieren mostrar -->
                    @endforeach
                </ul>
            </div>
            <div class="Opciones">
                <h2>Opciones</h2>
                <form action="{{ route('agregar-stock') }}" method="post">
                    @csrf
                    <label for="nombre">Nombre del Producto:</label>
                    <input type="text" name="nombre" required>
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" name="descripcion" required>
                    <label for="precio">Precio</label>
                    <input type="text" name="precio" required>
                    <label for="stock">Stock</label>
                    <input type="numer" name="stock" required>
                    <button type="submit">Agregar Stock</button>
                </form>

                <form action="{{ route('borrar-stock') }}" method="post">
                    @csrf
                    <label for="id">ID del Producto a Borrar:</label>
                    <input type="number" name="id" required>
                    <button type="submit">Borrar Stock</button>
                </form>

                <form action="{{ route('modificar-stock')}}" method="post">
                    @csrf
                    <label for="idM">ID del producto a modificar</label>
                    <input type="numer" name="idM" required>
                    <button type="submit">Modificar Stock</button>
                </form>
            </div>
        </div>
        
    </section>
</body>
</html>

/*use App\Stock; // Importa el modelo Stock

public function index()
{
    $stocks = Stock::all(); // Recupera todos los registros de la tabla "stock"
    
    return view('Stock', ['stocks' => $stocks]);
} algo asi deberia quedar la funcion del controlador que trae los datos de la base de datos