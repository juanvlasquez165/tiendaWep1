
<!DOCTYPE html5>

<html lang="es">
<head>
  <title>ejercicio</title>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supermecado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body background="https://artwallpaper.co/wp-content/uploads/2020/01/4v718eku9z221-1500x500.png">
<article>

<header>

    
        <nav class="navbar navbar-expand-lg navbar-darck bg-dark">
            <a class="navbar-brand" href="#"></a>
          <hr>
         <h3><a href="index.php">Volver a la tienda</a></th></span></a></h3>
         <hr>
    </header>
    <main>
    </main>
    <footer>
    </footer>
<br><br>
    <div class="card-deck">
  <div class="card">
    
    <img src="https://image.freepik.com/foto-gratis/foto-personas-sentadas-cerca-otras-leyendo-biblia_181624-22560.jpg" class="card-img-top" alt="..." >
    <div class="card-body">
      <h5 class="card-title">NOMBRE DEL PRODUCTO</h5>
      <p class="card-text">   <?php 
    $Nombreproducto = $_POST ['nombre']. '<br>' ;
     echo " "    , $Nombreproducto . '<br>' ; ?>
      <p class="card-text"><small class="text-muted">  <a href="calculador.php" class="btn btn-danger">Eliminar</a></small></p>
          
      <a href="form.php"><button type="submit" class="btn btn-info btn-block" name="registrarProducto.php">Registrar</button></a></smoll> 
  </div>


  </div>
  <div class="card">
    <img src="https://image.freepik.com/foto-gratis/mesa-madera_36051-46.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> MARCA DEL PRODUTO  </h5>
      <p class="card-text"> <?php
       $MarcaProducto = $_POST [ 'marca' ]. '<br>';
      echo "  "   , $MarcaProducto. '<br>' ; ?>
      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>
      <a href="form.php"><button type="submit" class="btn btn-info btn-block" name="registrarProducto.php">Registrar</button></a></smoll> 
 
    </div>

  </div>
  <div class="card">
    <img src="https://image.freepik.com/foto-gratis/como-me-mejoro_103577-1495.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">PRECIO DEL PRODUCTO </h5>
      <p class="card-text"> <?php 
        $PrecioProducto = $_POST [ 'precio' ]. '<br>' ;
  echo " " , $PrecioProducto  .'<br>' ;
?> 
 <p class="card-text"><small class="text-muted">  <a href="calculador.php" class="btn btn-danger">Eliminar</a></small></p>
 <a href="form.php"><button type="submit" class="btn btn-info btn-block" name="registrarProducto.php">Registrar</button></a></smoll> 
 

    </div>


</div>
<div class="card">
<img src="https://image.freepik.com/foto-gratis/copa-blanca-libros-antiguos_73683-880.jpg" class="card-img-top" alt="...">
<div class="card-body">
  <h5 class="card-title">AUTOR(ES) DEL PRODUCTO</h5>
  <p class="card-text"> <?php 
    $PrecioProducto = $_POST [ 'autor' ]. '<br>' ;
echo " " , $PrecioProducto  .'<br>' ;
?>
 

      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>
      <a href="form.php"><button type="submit" class="btn btn-info btn-block" name="registrarProducto.php">Registrar</button></a></smoll> 
   </div>
    <center>
        <br>
  <h1>
  <br><br><br>

  


</center>
  
</h1>
  

</body>
</html>
<?php
