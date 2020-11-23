<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>
    <script type="text/javascript" src="javascript/carrito.js" charset="utf-8"></script>
    <title>Tiendita de la esquina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
 <body>
  <form method="POST" action="ticket.php">
    <div class="container">
      <h2><center>MISCELANEA DE LA ESQUINA</center></h2>
      <form>
      <h3>Productos</h3>
      <form><select name="articulos" class="custom-select mb-3" id="producto">
          <option selected>Productos</option>
          <option value="24">Crema</option>
          <option value="13">Papas fritas</option>
          <option value="10">Gel para cabello</option>
          <option value="25">Audifonos</option>
          <option value="8">Agua 600ml</option>
          <option value="10">Palomitas</option>
          <option value="25">Salchichas</option>
          <option value="40">Cereal</option>
        </select>  
        <h3>Cantidad</h3>
        <input type="number" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidadproducto">
        <br>
        <h3>Carrito de compras</h3>
        <textarea rows="4" cols="50" name="carrito" form="usrform" id="almacenado">
        </textarea>
        <br>
        <h3>Total</h3>
        <input type="text" value="0" id="total" name="total" disabled>
        <br><br>
        <button type="button" class="btn btn-primary btn-lg" onclick="insertar()">INSERTAR</button> 

        <button type="button" class="btn btn-primary btn-lg" onclick="borrar()">NUEVA COMPRA</button>
        <br>
        <br>      
        <h3>Pago</h3>
        <input type="number" class="form-control" id="pagar" placeholder="Recibido" name="pagar">
        <br>
        <input type="submit" name="cobrar" class="btn btn-primary btn-lg" "value="Pagar">
    </div>
  </body>
</html>