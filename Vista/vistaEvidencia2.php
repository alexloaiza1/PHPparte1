<?php 
    include '../Modelo/Evidencia.php';
    include '../Controlador/ControlConexion.php';
    include '../Controlador/ControlEvidencia.php';

    $bot = "";
    $titulo="";
    $descripcion="";
    $fechaCreacion="";
    //$fechaRegistro="";
    $observacion="";
    $latitud="";
    $longitud="";
     $idEvidencia=0;
     $fechaRegistro = date('Y-m-d', time());
    if(isset($_POST['btn']))$bot = $_POST['btn'];
    if(isset($_POST['txtTitulo']))$titulo = $_POST['txtTitulo'];
    if(isset($_POST['txtDescripcion']))$descripcion = $_POST['txtDescripcion'];
    if(isset($_POST['txtFecha']))$fechaCreacion = $_POST['txtFecha'];
    if(isset($_POST['txtObservacion']))$observacion = $_POST['txtObservacion'];
    if(isset($_POST['txtLatitud']))$latitud = $_POST['txtLatitud'];
    if(isset($_POST['txtLongitud']))$longitud = $_POST['txtLongitud'];
    if(isset($_POST['txtId']))$idEvidencia = $_POST['txtId'];

    switch ($bot) {
        case 'Guardar':

            // LAS FECHAS SON EN FORMATE YYYY/MM/DD
            
            $objEvidencia= new Evidencia(0, $titulo, $descripcion, $_POST['tipo'],$fechaCreacion, $fechaRegistro,1,$observacion,"Registrada en verificacion",1,2,33,"1",0,1,$latitud,$longitud);
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $objControlEvidencia->guardar();
            break;
            
        case 'Consultar':
            $objEvidencia= new Evidencia($idEvidencia,"","",0,"","",0,"","",0,0,0,"0",0,0,"0","0");
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $objEvidencia=$objControlEvidencia->consultar();
            
            $idEvidencia=$objEvidencia->getIdEvidencia();
            $titulo=$objEvidencia->getTitulo();
            $descripcion=$objEvidencia->getDescripcion();
            $fechaCreacion=$objEvidencia->getFechaCreacion();
            $observacion=$objEvidencia->getObservacion();
            $latitud=$objEvidencia->getLatitud();
            $longitud=$objEvidencia->getLongitud();


            //var_dump($objEvidencia);
            break;

        case 'Modificar':
            //$objEvidencia= new Evidencia(2,"Modificado","esto es modificar",3,"2010/11/12","2020/12/23",1,"prueba modificar","",1,2,33,"1",0,1,"10005","1225");
            $objEvidencia= new Evidencia($idEvidencia, $titulo, $descripcion, $_POST['tipo'],$fechaCreacion, $fechaRegistro,1,$observacion,"Registrada en verificacion",1,2,33,"1",0,1,$latitud,$longitud);
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $objControlEvidencia->modificar();
            break;

        case 'Borrar':
            $objEvidencia= new Evidencia($idEvidencia,"","",0,"","",0,"","",0,0,0,"0",0,0,"0","0");
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $objControlEvidencia->borrar();
            break;
        
       /* case 'Listar':
            $objEvidencia= new Evidencia($cod,$nom,$tel,$ema,$dir,$bot);
            $objControlEvidencia = new ControlEvidencia($objEvidencia);
            $mat=$objControlEvidencia->listar();
            
            break;*/
        default:
            # code...
            break;
    }

?>
<?php include '../partials/head.php'; ?>
<?php include '../partials/menu.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
    
<div class="container">

<div class="starter-template">
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="vistaEvidencia2.php" method="POST" role="form">
                        <legend>Registro de evidencia</legend>
                        <div class="form-group">
                            <label for="id">Id evidencia</label>
                            <input type="number" name="txtId" class="form-control" id="id" autofocus required placeholder="Ingrese el id de la evidencia a borrar/modificar" value="<?php echo $idEvidencia?>">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" name="txtTitulo" class="form-control" id="titulo" autofocus required placeholder="Ingrese el titulo" value="<?php echo $titulo?>">
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" name="txtDescripcion" class="form-control" id="descripcion"  required placeholder="Ingresa la descripcion" value="<?php echo $descripcion?>">
                        </div>
                        <div class="form-group">
                            <label for="fechaCreacion">Fecha creacion</label>
                            <input type="text" name="txtFecha" class="form-control" id="fechaCreacion" autofocus required placeholder="Fecha creacion de la evidencia" value="<?php echo $fechaCreacion?>">
                        </div>

                        <div class="form-group">
                            <label for="observacion">Observacion</label>
                            <input type="text" name="txtObservacion" class="form-control" id="observacion" autofocus required placeholder="Observaciones sobre la evidencia" value="<?php echo $observacion?>">
                        </div>

                        <div class="form-group">
                            <label for="latitud">Latitud</label>
                            <input type="text" name="txtLatitud" class="form-control" id="latitud" autofocus required placeholder="Ingrese la latitud de el lugar de la evidencia" value="<?php echo $latitud?>">
                        </div>

                        <div class="form-group">
                            <label for="longitud">Longitud</label>
                            <input type="text" name="txtLongitud" class="form-control" id="longitud" autofocus required placeholder="Ingrese la longitud de el lugar de la evidencia" value="<?php echo $longitud?>">
                        </div>
                        <label for="TipoEvidencia">Tipo de archivo</label>
                        <select name="tipo" class="form-control">
                            <option value=1>Video</option>
                            <option value=2>Texto</option>
                            <option value=3>Imagen</option>
                            <option value=4>Otros</option>
                        </select>

                        <label for="Capitulo">Capitulo</label>
                        <select id="Capitulo" name="Capitulo" class="form-control">
                            <option value="1">Mecanismos de selección y evaluación de estudiantes y profesores</option>
                            <option value="2">Estructura administrativa y académica</option>
                            <option value="3">Cultura de la autoevaluación</option>
                            <option value="4">Programa de egresados</option>
                            <option value="5">Modelo de bienestar</option>
                            <option value="6">Recursos suficientes para garantizar el cumplimiento de las metas</option>
                        </select>

                        <?php 
                        if($_POST['Capitulo'] == 1){
                            ?>
                            <label for="Seccion">Secciones</label>
                        <select name="seccion" class="form-control">
                            <option value="1">Mecanismos de selección y evaluación de estudiantes</option>
                            <option value="2">Mecanismos de selección y evaluación de profesores</option>
                            <option value="3">Sin sección Capitulo 1</option>
                         </select>
                        
                        <?php
                        } //else if(){} Faltan el resto de las secciones
                        ?>

                        <?php 
                        if($_POST['seccion'] == 1){
                            ?>
                            <label for="Articulos">Articulos</label>
                        <select name="Articulos" class="form-control">
                            <option value="7">Articulo 7 </option>
                            <option value="8">Articulo 8 </option>
                            <option value="9">Articulo 9</option>
                            <option value="10">Articulo 10</option>
                            <option value="11">Articulo 11</option>
                            <option value="12">Articulo 12</option>
                            <option value="13">Articulo 13</option>
                        </select>

                        <?php
                        } //else if(){} Faltan el resto de los articulos
                        ?>

                        <?php 
                        if($_POST['Articulos'] == 7){
                            ?>
                            <label for="Literales">Literales</label>
                        <select name="Literales" class="form-control">
                            <option value="1">a </option>
                            <option value="2">b </option>
                            <option value="3">c</option>
                            <option value="4">d</option>
                            <option value="5">e</option>
                            <option value="6">f</option>
                        </select>

                        <?php
                        } //else if(){} Faltan el resto de los literales
                        ?>




                        
                        <div class="row">


                            <div class="col-sm-3 ">
                                <button type="submit" class="btn btn-success" name="btn"
                                value="Guardar">Guardar</button>
                            </div>

                            <div class="col-sm-3 ">
                            <button type="submit" class="btn btn-success" name="btn"
                                value="Consultar">Consultar</button>
                            </div> 

                            <div class="col-sm-3 ">
                            <button type="submit" class="btn btn-success" name="btn"
                                value="Modificar">Modificar</button>
                            </div>   

                            <div class="col-sm-3 ">
                            <button type="submit" class="btn btn-success" name="btn"
                                value="Borrar">Borrar</button>
                            </div> 

                        </div>

                        
    
                    </form>
                </div>
            </div>

          



            

    </div>
</div>

</div>
</body>
</html>