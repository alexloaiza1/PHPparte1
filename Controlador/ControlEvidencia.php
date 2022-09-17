<?php
    class ControlEvidencia{
        var $objEvidencia;

        function __construct($objEvidencia){
            $this->objEvidencia = $objEvidencia;
        }

        function guardar(){
            //asignar en variables locales los datos a guardar
            $idEvi = $this->objEvidencia->getIdEvidencia();
            $titulo = $this->objEvidencia->getTitulo();
            $descrip = $this->objEvidencia->getDescripcion();
            $tipoEvi = $this->objEvidencia->getIdTipoEvidencia();
            $fechacrea = $this->objEvidencia->getFechaCreacion();
            $fecharegis = $this->objEvidencia->getFechaRegistroEvidencia();
            $autor = $this->objEvidencia->getIdAutor();
            $observacion = $this->objEvidencia->getObservacion();
            $estado = $this->objEvidencia->getEstado();
            $capitulo = $this->objEvidencia->getIdCapitulo();
            $seccion = $this->objEvidencia->getSeccion();
            $articulo = $this->objEvidencia->getArticulo();
            $literal = $this->objEvidencia->getLiteral();
            $numeral = $this->objEvidencia->getNumeral();
            $paragrafo = $this->objEvidencia->getParagrafo();
            $latitud = $this->objEvidencia->getLatitud();
            $longitud = $this->objEvidencia->getLongitud();

            $sql="INSERT INTO evidencias VALUES('"."','".$titulo."','".$descrip."','".$tipoEvi."','".$fechacrea."','".$fecharegis.
            "','".$autor."','".$observacion."','".$estado."','".$capitulo."','".$seccion."','".$articulo."','".$literal."','".$numeral."','".$paragrafo.
            "','".$latitud."','".$longitud."')";

            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbevidencias", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }

        function modificar(){
            $idEvi = $this->objEvidencia->getIdEvidencia();
            $titulo = $this->objEvidencia->getTitulo();
            $descrip = $this->objEvidencia->getDescripcion();
            $tipoEvi = $this->objEvidencia->getIdTipoEvidencia();
            $fechacrea = $this->objEvidencia->getFechaCreacion();
            $fecharegis = $this->objEvidencia->getFechaRegistroEvidencia();
            $autor = $this->objEvidencia->getIdAutor();
            $observacion = $this->objEvidencia->getObservacion();
            $estado = $this->objEvidencia->getEstado();
            $capitulo = $this->objEvidencia->getIdCapitulo();
            $seccion = $this->objEvidencia->getSeccion();
            $articulo = $this->objEvidencia->getArticulo();
            $literal = $this->objEvidencia->getLiteral();
            $numeral = $this->objEvidencia->getNumeral();
            $paragrafo = $this->objEvidencia->getParagrafo();
            $latitud = $this->objEvidencia->getLatitud();
            $longitud = $this->objEvidencia->getLongitud();

            $sql="UPDATE evidencias SET titulo='".$titulo."',descripcion='".$descrip."',idTipoEvidencia='".$tipoEvi."',fechaCreacion='".$fechacrea."', 
            fechaRegistro='".$fecharegis."', idAutor='".$autor."', observacion='".$observacion."', estado='".$estado."', idCapitulo='".$capitulo."', 
            seccion='".$seccion."', articulo='".$articulo."', literal='".$literal."',numeral='".$numeral."', paragrafo='".$paragrafo."', latitud='".$latitud."', 
            longitud='".$longitud."' WHERE idevidencia=".$idEvi."";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbevidencias", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }

        function borrar(){
            $cod = $this->objEvidencia->getIdEvidencia();

            $sql="DELETE FROM evidencias WHERE idEvidencia='".$cod."'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbevidencias", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }
        function consultar(){
            $idEvi = $this->objEvidencia->getIdEvidencia();

            $sql="SELECT * FROM evidencias WHERE idEvidencia=".$idEvi."";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbevidencias", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $this->objEvidencia->setTitulo($row['titulo']);
                $this->objEvidencia->setDescripcion($row['descripcion']);
                $this->objEvidencia->setIdTipoEvidencia($row['idTipoEvidencia']);
                $this->objEvidencia->setFechaCreacion($row['fechaCreacion']);
                $this->objEvidencia->setFechaRegistroEvidencia($row['fechaRegistro']);
                $this->objEvidencia->setIdAutor($row['idAutor']);
                $this->objEvidencia->setObservacion($row['observacion']);
                $this->objEvidencia->setEstado($row['estado']);
                $this->objEvidencia->setIdCapitulo($row['idCapitulo']);
                $this->objEvidencia->setSeccion($row['seccion']);
                $this->objEvidencia->setArticulo($row['articulo']);
                $this->objEvidencia->setLiteral($row['literal']);
                $this->objEvidencia->setNumeral($row['numeral']);
                $this->objEvidencia->setParagrafo($row['paragrafo']);
                $this->objEvidencia->setLatitud($row['latitud']);
                $this->objEvidencia->setLongitud($row['longitud']);

            }
            $objControlConexion->cerrarBd();
            return $this->objEvidencia;
        }

       /* function listar(){
            $cod = $this->objEvidencia->getCodigo();
            $mat=[];
            $i=0;

            $sql="SELECT * FROM PERSONA";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","dbevidencias", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $mat[$i][0]=$row['codigo'];
                $mat[$i][1]=$row['nombre'];
                $mat[$i][2]=$row['telefono'];
                $mat[$i][3]=$row['email'];
                $mat[$i][4]=$row['direccion'];

                $i++;

            }
            $objControlConexion->cerrarBd();
            return $mat;
        }*/
    }
?>