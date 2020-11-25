<?php
 $carro= $_POST ['car'];
 $total = $_POST ['conclusion'];
 $recibir = $_POST['pago'];
 $cambio =  $recibir - $total;
?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen"/>
    <script type="text/javascript" src="javascript/carrito.js" charset="utf-8"></script>
    <title>Ticket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div>
      <h1 >MISCELANEA DE LA ESQUINA</h1>
      <br>
      <h3>Ticket de compra</h3>
      <p><?php echo date("D M j G:i:s:A Y");?></p>
      <p>---------------------------------------------------------------</p>
      <p >Todas tus compras: <br><?php print ($carro);?></p>
     <p>---------------------------------------------------------------</p>
      <p>Total: <?php print("$".$total);?></p>
      <p>Recibido: <?php print("$".$recibir);?></p>
       <p>Cambio: <?php print("$".$cambio);?></p>
      <p>---------------------------------------------------------------</p>
      <p >SISTEMA DE FACTURACION</p>
      <p>Gracias por su compra</p>
      <p>---------------------------------------------------------------</p>
      
    </div>
  </body>
</html>