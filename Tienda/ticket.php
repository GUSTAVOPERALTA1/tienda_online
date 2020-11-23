<?php
 $carrito = $_POST[ 'almacenado'];
 $total = $_POST ['total'];
 $pago = $_POST['pagar'];
 $cambio =  $pago - $total;
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css" media="screen"/>
    <script type="text/javascript" src="javascript/carrito.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/sweetalert2.all.min.js" charset="utf-8"></script>
    <title>Ticket de compra</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <form method="POST" action="tienda.php">
    <div">
      <h1 >Tiendita de la esquina</h1>
      <br>
      <h3>Aqui esta su compra:</h3>
      
      <p >Articulos: <br><?php print($carrito);?></p>
    <p>********************************************************************</p>
      <p>Total: <?php print("$".$total);?></p>
      <p>Recibido: <?php print("$".$pago);?></p>
       <p>Cambio: <?php print("$".$cambio);?></p>
      <p><?php echo date("D M j G:i:s:A Y");?></p>
      <p>********************************************************************</p>
      <p >Gracias por su compra, buen dia</p>
     <p>********************************************************************</p>
      
    </div>
  </body>
</html>