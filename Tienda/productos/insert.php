<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>
    <title>Insertar registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head>

<body>
    <div class="container-fluid">
        <h1>Insertar</h1>
        <a href="index.php">Todos los productos</a>

        <form action="db/list_insert.php" method="GET">
            <div class="form-group">
                <label for="producto">Producto</label>
                <input type="text" class="form-control" id="producto" name="articulo" aria-describedby="aria_producto" placeholder="Ingresa el nombre del producto">
            
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio" name="valor" aria-describedby="aria_precio" placeholder="Ingresa el precio">
            
            </div>
            <div class="form-group">
                <label for="existencias">Existencia</label>
<<<<<<< HEAD
                <input type="text" class="form-control" id="existencia" name="cantidades" aria-describedby="aria_existencia" placeholder="Existencia">
=======
                <input type="text" class="form-control" id="existencias" name="existencias" aria-describedby="aria_existencia" placeholder="Existencia">
>>>>>>> 7958bfe4344ae0645d0351188f7d40d3484c8c0f
            
            </div>
            <button type="submit" class="btn btn-primary">Insertar</button>
        </form>

    </div>
</body>

</html>