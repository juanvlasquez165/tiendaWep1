
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
            <a class="navbar-brand" href="total.php"></a>
          <hr>
         <a href="index.php">Volver a la tienda</a></th></span></a></h3>
         <hr>
    </header>
    <main>
    </main>
    <footer>
    </footer>
<br><br>
    <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card">
      <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/betty.jpg?raw=true" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ilustracion</h5>
        <p class="card-text"><?php 
  $ilustracion= $_POST [ 'ilustracion' ]. '<br>' ;
 echo  "VALOR DE EL LIBRO:   ",$ilustracion.'<br>';
 ?>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/pedro.jpg?raw=true" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">autores</h5>
        <p class="card-text"><?php 
  $AUTORES= $_POST [ 'autor' ]. '<br>' ;
echo  "AUTORES DEL LIBRO :   ",$AUTORES.'<br>';
?>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/leo.jpg?raw=true" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">valor</h5>
        <p class="card-text">   <?php 
  $VALORDELIBRO= $_POST [ 'libro' ]. '<br>' ;
 echo  "VALOR DE EL LIBRO:   ",$VALORDELIBRO.'<br>';
 ?>

      </div>
    </div>
  </div>
  cvbn
  </div>
</div>
    <div class="card-deck">
  <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/betty.jpg?raw=true" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">link de la imagen</h5>
      <p class="card-text">   
<?php 
    $LINKDELAIMAGEN = $_POST [ 'imagen' ]. '<br>' ;
    echo "LINK DE LA IMAGEN :   "    , $LINKDELAIMAGEN . '<br>' ;
    ?>

      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>
                    </div>

                    </div>
  <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/pedro.jpg?raw=true" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">editorial</h5>
      <p class="card-text">
<?php 
  $EDITORIAL= $_POST [ 'edit' ]. '<br>' ;
  echo  "EDITORIAL DEL LIBRO :   ",$EDITORIAL.'<br>';
  ?>


      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>
   
      
  </div>
  </div>
  <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/leo.jpg?raw=true" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">libro  </h5>
      <p class="card-text"> 
<?php 
    $NOMBREDELLIBRO= $_POST [ 'libro' ]. '<br>' ;
    echo "NOMBRE DEL LIBRO:    "   ,  $NOMBREDELLIBRO. '<br>' ;
    ?>
  
      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>
    
    </div>

  </div>
  <div class="card">
    <img src="https://github.com/jjosegallegocesde/imagenes/blob/main/pedro.jpg?raw=true" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">descripcion</h5>
      <p class="card-text"><?php 
  $DESCRIPCION = $_POST [ 'descrip' ]. '<br>' ;
  echo "DESCRIPCION DE EL LIBRO :    "    , $DESCRIPCION  .'<br>' ;
  ?>

      <p class="card-text"><small class="text-muted">  <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a></small></p>

</center>
  

  

</body>
</html>
