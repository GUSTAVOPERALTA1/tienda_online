function insertar(){
  var cantidad= $("#cantidad").val();
  var nombre= $("#seleccion option:selected").text();  
  var precio=$("#seleccion").val();
  var carrito=$("#todo").val(); 
  if(cantidad<10 & cantidad >0 &  precio >0) {
    
    $("#todo").text("Cantidad :"+ cantidad + "\nProducto: " +nombre + "\nPrecio: $" + precio + "\nTotal:$"+ parseFloat(cantidad)*parseFloat(precio)+"\n"+carrito);
    listo(parseFloat(cantidad)* parseFloat(precio));
  }
  if (cantidad <=0 & precio<=0 ){
    alert("Seleccione un producto y cantidad por favor :)")
  }

  else if (cantidad>0 & cantidad>=10 & precio>0){
    alert("Ingrese valores en el rango 0/10")
  }

  else if (precio>0 & cantidad<=0 || precio<=0 & cantidad>0 ){
    alert("No existen registros con esos atributos")
  }
}


function limpiar(){
  $("#todo").empty();
  $("#total").val('0');
  $("#cantidad").val('0');
}

function listo(costo){
  var totalPrimero =$("#total").val();
  var totalSegundo = parseFloat(totalPrimero)+parseFloat(costo);
  $("#total").val(totalSegundo)
}
