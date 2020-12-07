<?php
//1
$id=$_GET["id"];
//2
if (isset($_POST["botonEditar"])){
    $nombre=$_post["nombreEditar"];
    $descripcion=$_post["descripcionEditar"];
//3
$transaccion=new Basedatos();
//4consulta


//5 editar
$transaccion->editardatos($consultaSQL);


//redirecion 

header("location:formularioRegistro.php");



}







?>