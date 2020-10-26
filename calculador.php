
<!DOCTYPE html5>

<html lang="es">
<head>
  <title>ejercicio</title>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>supermecado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
<body>
<article>

<header>



        
        <nav class="navbar navbar-expand-lg navbar-darck bg-dark">
            <a class="navbar-brand" href="#"></a>
          <hr>
               <a href="index.php">ir a la tienda</a></th></span></a>
         <hr>
    </header>
    <main>
    </main>
    <footer>
    </footer>

    
    <center>
        <br>
  
<?php 

    
    $Nombreproducto = $_POST [ 'nombre' ]. '<br>' ;

    $MarcaProducto = $_POST [ 'marca' ]. '<br>' ;

  $PrecioProducto = $_POST [ 'precio' ]. '<br>' ;
  
  $describcion = $_POST [ 'descrip' ]. '<br>' ;
  
  echo "el nombre del producto es :" , $Nombreproducto . '<br>' ;
  echo "la marca del producto es :" , $MarcaProducto. '<br>' ;
  echo "el precio del producto es de:" , $PrecioProducto  .'<br>' ;
 echo  "la describcion del producto es de : ",$describcion .'<br>';

?>
</center>
  
  
  

</body>
</html>
