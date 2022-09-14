<?php
    class Evidencia{ //Clase evidencia
        private int $Id;
        private string $nombreEvidencia;
        private string $descripcion;
        private int $idtipoEvidencia;
        private string $fechaCreacion;
        private string $fechaRegistroEvidencia;
        private int $idautor;
        private string $observacion;
        private string $estado;
        private int $idcapitulo;
        private string $latitud;
        private string $longitud;




        function __construct(int $Id, string $nombreEvidencia,string $descripcion, int $idtipoEvidencia, string $fechaCreacion, string $fechaRegistroEvidencia,int $idautor,string $observacion,string $estado,int $idcapitulo,string $latitud,string $longitud){ //Constructor con parametros
            $this->Id = $Id;
            $this->nombreEvidencia = $nombreEvidencia;
            $this->descripcion= $descripcion;
            $this->idtipoEvidencia = $idtipoEvidencia;
            $this->fechaCreacion = $fechaCreacion;
            $this->fechaRegistroEvidencia = $fechaRegistroEvidencia;
            $this->idautor = $idautor;
            $this->observacion = $observacion;
            $this->estado = $estado;
            $this->idcapitulo = $idcapitulo;
            $this->latitud = $latitud;
            $this->longitud = $longitud;
        }
        
       public function getId()
       {
       return $this->Id;
       }
       
       
       public function setId($Id)
       {
       $this->Id = $Id;
       
       return $this;
       }
       
              
               public function getNombreEvidencia()
               {
                       return $this->nombreEvidencia;
               }
       
              
               public function setNombreEvidencia($nombreEvidencia)
               {
                       $this->nombreEvidencia = $nombreEvidencia;
       
                       return $this;
               }
       
              
               public function getDescripcion()
               {
                       return $this->descripcion;
               }
       
               
               public function setDescripcion($descripcion)
               {
                       $this->descripcion = $descripcion;
       
                       return $this;
               }
       
               
               public function getIdtipoEvidencia()
               {
                       return $this->idtipoEvidencia;
               }
       
               
               public function setIdtipoEvidencia($idtipoEvidencia)
               {
                       $this->idtipoEvidencia = $idtipoEvidencia;
       
                       return $this;
               }
       
               
               public function getFechaCreacion()
               {
                       return $this->fechaCreacion;
               }
       
               
               public function setFechaCreacion($fechaCreacion)
               {
                       $this->fechaCreacion = $fechaCreacion;
       
                       return $this;
               }
       
               
               public function getFechaRegistroEvidencia()
               {
                       return $this->fechaRegistroEvidencia;
               }
       
               
               public function setFechaRegistroEvidencia($fechaRegistroEvidencia)
               {
                       $this->fechaRegistroEvidencia = $fechaRegistroEvidencia;
       
                       return $this;
               }
       
               public function getIdautor()
               {
                       return $this->idautor;
               }
       
              
               public function setIdautor($idautor)
               {
                       $this->idautor = $idautor;
       
                       return $this;
               }
       
              
               public function getObservacion()
               {
                       return $this->observacion;
               }
       
               
               public function setObservacion($observacion)
               {
                       $this->observacion = $observacion;
       
                       return $this;
               }
       
               
               public function getEstado()
               {
                       return $this->estado;
               }
       
              
               public function setEstado($estado)
               {
                       $this->estado = $estado;
       
                       return $this;
               }
       
              
               public function getIdcapitulo()
               {
                       return $this->idcapitulo;
               }
       
              
               public function setIdcapitulo($idcapitulo)
               {
                       $this->idcapitulo = $idcapitulo;
       
                       return $this;
               }
       
               
               public function getLatitud()
               {
                       return $this->latitud;
               }
       
               
               public function setLatitud($latitud)
               {
                       $this->latitud = $latitud;
       
                       return $this;
               }
       
             
               public function getLongitud()
               {
                       return $this->longitud;
               }
       
             
               public function setLongitud($longitud)
               {
                       $this->longitud = $longitud;
       
                       return $this;
               }




    }
?>