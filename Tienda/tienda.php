<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>
    <script type="text/javascript" src="javascript/carrito.js" charset="utf-8"></script>
    <title>TIENDA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body background="fondo.jpg">
    <div class="container">
      <h1><center>MISCELANEA LA ESQUINITA</center></h1>
      <form method="POST" action="ticket.php">
      <h3>Productos</h3>
         <form><select name="productos" class="custom-select mb-3" id="seleccion">
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
        <h3>CANTIDAD:</h3>
        <input type="number" class="form-control" id="cantidad" placeholder="Cantidades" name="cantidad">
        <br>
        <textarea class="form-control" rows="4" id="todo" name="car" ></textarea>
        <br>
        <br>
        <h3>TOTAL:</h3>
        <input type="text" value="0" id="total" name="conclusion" >
        <br>
        <br>
        <button type="button" class="btn btn-primary btn-lg" onclick="insertar()">INSERTAR</button> 
        <button type="button" class="btn btn-primary btn-lg" onclick="limpiar()">NUEVA COMPRA</button>
        <br><br>
        <h3>PAGAR:</h3>
        <input type="number" class="form-control" id="enviar" placeholder="Recibido" name="pago">
        <br>
        <input type="submit" name="cobro" class="btn btn-primary btn-lg" value="ENVIAR">
    </div>
  </body>
</html>