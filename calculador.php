
<!DOCTYPE html5>

<html lang="es">
<head>
  <title>ejercicio</title>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supermecado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body background="md.jpg">
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

    <div class="card-deck">
  <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/betty.jpg?raw=true" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">nombre</h5>
      <p class="card-text">   <?php 
    $Nombreproducto = $_POST [ 'nombre' ]. '<br>' ;
     echo "el nombre del producto es:   "    , $Nombreproducto . '<br>' ; ?>
      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>
                    </div>


  </div>
  <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/leo.jpg?raw=true" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"> marca  </h5>
      <p class="card-text"> <?php $MarcaProducto = $_POST [ 'marca' ]. '<br>';
      echo "la marca del producto es:    "   , $MarcaProducto. '<br>' ; ?>
      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>
    
    </div>

  </div>
  <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/pedro.jpg?raw=true" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">precio </h5>
      <p class="card-text"> <?php   $PrecioProducto = $_POST [ 'precio' ]. '<br>' ;
  echo "el precio del producto es de: " , $PrecioProducto  .'<br>' ;
?>
      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>
   
  


    </div>
  </div>

  <a href="calculador"><button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar</button></a> 
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
