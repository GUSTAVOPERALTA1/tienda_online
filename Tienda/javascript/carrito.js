function insertar(){
  var cantidad= $("#cantidad").val();
  var nombre= $("#producto option:selected").text();  
  var precio=$("#producto").val();
  var carrito=$("#almacenado").val(); 
  var total=0;  
  if(cantidad<10 & cantidad >0 &  precio >0) {
    
    $("#almacenado").text("Producto: "+nombre + "\nCantidad: " +cantidad+  "\nPrecio: $" + precio + "\nTotal: $"+ parseFloat(cantidad)*parseFloat(precio)+"\n"+carrito);
    listo(parseFloat(cantidad)* parseFloat(precio));
  }
  }
function borrar(){
  $("#almacenado").empty();
  $("#total").val('0');
}
function listo(costo){
  var totalNew =$("#total").val();
  var totalEnd = parseFloat(totalNew)+parseFloat(costo);
  $("#total").val(totalEnd)
}
