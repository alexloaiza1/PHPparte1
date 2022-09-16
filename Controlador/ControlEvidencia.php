<?php
    class ControlEvidencia{
        var $objEvidencia;

        function __construct($objEvidencia){
            $this->objEvidencia = $objEvidencia;
        }

        function guardar(){
            //asignar en variables locales los datos a guardar
            $cod = $this->objEvidencia->getCodigo();
            $nom = $this->objEvidencia->getNombre();
            $tel = $this->objEvidencia->getTelefono();
            $ema = $this->objEvidencia->getEmail();
            $dir = $this->objEvidencia->getDireccion();

            $sql="INSERT INTO PERSONA VALUES('".$cod."','".$nom."','".$tel."','".$ema."','".$dir."')";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","bdclientes", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }

        function modificar(){
            $cod = $this->objEvidencia->getCodigo();
            $nom = $this->objEvidencia->getNombre();
            $tel = $this->objEvidencia->getTelefono();
            $ema = $this->objEvidencia->getEmail();
            $dir = $this->objEvidencia->getDireccion();

            $sql="UPDATE PERSONA SET NOMBRE='".$nom."',TELEFONO='".$tel."',EMAIL='".$ema."',DIRECCION='".$dir."' WHERE CODIGO='".$cod."'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","bdclientes", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }

        function borrar(){
            $cod = $this->objEvidencia->getCodigo();

            $sql="DELETE FROM PERSONA WHERE CODIGO='".$cod."'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","bdclientes", 3306);
            $objControlConexion->ejecutarComandoSql($sql);
            $objControlConexion->cerrarBd();
        }
        function consultar(){
            $cod = $this->objEvidencia->getCodigo();

            $sql="SELECT * FROM PERSONA WHERE CODIGO='".$cod."'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","bdclientes", 3306);
            $recordSet=$objControlConexion->ejecutarSelect($sql);
            if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $this->objEvidencia->setNombre($row['nombre']);
                $this->objEvidencia->setTelefono($row['telefono']);
                $this->objEvidencia->setEmail($row['email']);
                $this->objEvidencia->setDireccion($row['direccion']);
            }
            $objControlConexion->cerrarBd();
            return $this->objEvidencia;
        }

        function listar(){
            $cod = $this->objEvidencia->getCodigo();
            $mat=[];
            $i=0;

            $sql="SELECT * FROM PERSONA";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd("localhost","root","","bdclientes", 3306);
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
        }
    }
?>