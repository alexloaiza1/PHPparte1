<?php 
    include '../Modelo/Evidencia.php';
    include '../Controlador/ControlConexion.php';
    include '../Controlador/ControlEvidencia.php';
    $bot = "";
    if(isset($_POST['btn']))$bot = $_POST['btn'];
    switch ($bot) {
        case 'Guardar':

            // LAS FECHAS SON EN FORMATE YYYY/MM/DD
            $objEvidencia= new Evidencia(0,"Prueba","esto es una prueba",1,"2000/11/12","2014/12/23","1","prueba observacion","",1,2,33,"1",0,1,"10005","1225");
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $objControlEvidencia->guardar();
            break;
        /*case 'Consultar':
            $objEvidencia= new Evidencia($cod,"","","","");
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $objEvidencia=$objControlEvidencia->consultar();
            $nom=$objEvidencia->getNombre();
            $tel=$objEvidencia->getTelefono();
            $ema=$objEvidencia->getEmail();
            $dir=$objEvidencia->getDireccion();
            

            //var_dump($objEvidencia);
            break;

        case 'Modificar':
            $objEvidencia= new Evidencia($cod,$nom,$tel,$ema,$dir,$bot);
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $objControlEvidencia->modificar();
            break;

        case 'Borrar':
            $objEvidencia= new Evidencia($cod,$nom,$tel,$ema,$dir,$bot);
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $objControlEvidencia->borrar();
            break;
        
        case 'Listar':
            $objEvidencia= new Evidencia($cod,$nom,$tel,$ema,$dir,$bot);
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $mat=$objControlEvidencia->listar();
            
            break;*/
        default:
            # code...
            break;
    }

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
                                <form action="evidencia.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="Id" placeholder="cod_cliente">
                                    <input type="text" class="form-control mb-3" name="" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">
                                    <input type="text" class="form-control mb-3" name="emal" placeholder="Email">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                                    
                                    <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-2">
        <input type="submit" value="Guardar" name="btn"/>
    </div>
    <div class="col-sm-2">
        <input type="submit" value="Consultar" name="btn"/>
    </div> 
    <div class="col-sm-2">
        <input type="submit" value="Modificar" name="btn"/>
    </div>     
    <div class="col-sm-2">
        <input type="submit" value="Borrar" name="btn"/>
    </div> 
    <div class="col-sm-2">
        <input type="submit" value="Listar" name="btn"/>
    </div>   
    <div class="col-sm-1">
    </div>  
</div>
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
                                        
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>