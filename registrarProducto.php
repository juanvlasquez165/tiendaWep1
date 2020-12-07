<center>
<?php 

include("BaseDatos.php");

if (isset($_POST["BotonEnvio"])){
//1 resivir los datos desde la vista (interfaz usuario)
 
$Nombreproducto = $_POST [ 'nombre' ]. '<br>' ;
 $MarcaProducto = $_POST [ 'marca' ]. '<br>';
 $PrecioProducto = $_POST [ 'precio' ]. '<br>' ;
 $PrecioProducto = $_POST [ 'precio' ]. '<br>' ;
 //2 crear un copia de la BaeDatos
//creaar un objeto de la Base basedatos
$transaccion = new BaseDatos();

 //3 creear una consilta sql para agregar datos 

 $consultaSQL="INSERT INTO usuarios( id,nombre,precio,descripcion,marca ) VALUES ( '$id','$nombre','$precio','$descripcion','$marca')";

//4 utilizo la funcion para insertar datos 
//la clase base de datos 
$transaccion->agregarDatos($consultaSQL);

}




?>


</center>