<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php 
        
        include("Basedatos.php");
        
        //1. crear una copia de la clase BD
        //crear un objeto de la clase bd
        $transaccion=new Basedatos();

        //2.Crear la consulta para buscar datos
        $consultaSQL="SELECT * FROM usuarios WHERE 1";

        //3.Utilizar el metodo consultarDatos
        $usuarios=$transaccion->consultarDatos($consultaSQL);

        print_r($usuarios);
    
    ?>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
editar
    </button>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($usuarios as $usuario):?>

                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="<?php echo($usuario["foto"])?>" class="card-img-top" alt="FOTO">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($usuario["nombre"])?></h5>
                            <p class="card-text"><?php echo($usuario["descripcion"])?></p>
                            <a href="eliminarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a>

              <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
          </div>
                    </div>
                </div>


            <?php endforeach?>

        </div>


    </div>









  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>