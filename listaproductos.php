<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO DE PRODUCTOS</title>
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

        print_r($Productos);
    
    ?>

    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($Productos as $Productos):?>

                <div class="col mb-4">
                    
                    <div class="card h-100">
                        <img src="<?php echo($Productos["foto"])?>" class="card-img-top" alt="FOTO">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo($Productos["nombre"])?></h5>
                            <p class="card-text"><?php echo($Productos["descripcion"])?></p>
                            <a href="eliminarProductos.php?id=<?php echo($Productos["idusuario"])?>" class="btn btn-danger">Eliminar</a>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($usuario["idusuario"])?>">
                                Editar
                            </button>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="editar<?php echo($Productos["idusuario"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edición de Productos</p></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                   <form action="editarProducto.php?id=<?php echo($Productos["idusuario"]) ?>" method="POST">
                                        <div class="form-group">
                                            <label>Producto:</label>
                                            <input type="text" class="form-control" name="productoEditar" value="<?php echo($Productos["Producto"])?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Descripcion:</label>
                                            <textarea class="form-control"rows="3" name="descripcionEditar"><?php echo($Productos["descripcion"])?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info" name="botonEditar">Editar</button>
                                   </form>
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