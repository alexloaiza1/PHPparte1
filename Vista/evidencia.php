<?php 
    include '../Modelo/Evidencia.php';
    include '../Controlador/ControlConexion.php';
    include '../Controlador/ControlEvidencia.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> REGISTRO DE EVIDENCIA</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Registro de Evidencia</h1>
                            <h1>Cambio de prueba</h1>
                                <form action="controlador/controlconexion.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Id" placeholder="cod_cliente">
                                    <input type="text" class="form-control mb-3" name="" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="emal" placeholder="Email">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Email</th>
                                        <th>Direccion</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['codigo']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['emal']?></th>   
                                                <th><?php  echo $row['direccion']?></th>     
                                                <th><a href="actualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                                <!--<th><a href="delete.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>  --->                                     
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>