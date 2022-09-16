<?php
    class Evidencia{ //Clase evidencia
        private int $idEvidencia;
        private string $titulo;
        private string $descripcion;
        private int $idtipoEvidencia;
        private string $fechaCreacion;
        private string $fechaRegistroEvidencia;
        private int $idAutor;
        private string $observacion;
        private string $estado;
        private int $idcapitulo;
        private int $seccion;
        private int $articulo;
        private string $literal;
        private int $numeral;
        private int $paragrafo;
        private string $latitud;
        private string $longitud;


// (int, string, string, int, string, 
//string, int, string, string, int 
//int int string, int, int, string, string)

        function __construct(int $idEvidencia, string $titulo,string $descripcion, int $idtipoEvidencia, string $fechaCreacion, 
        string $fechaRegistroEvidencia,int $idAutor,string $observacion,string $estado,int $idcapitulo,
         int $seccion, int $articulo, string $literal, int $numeral, int $paragrafo,string $latitud, string $longitud){ //Constructor con parametros
            $this->idEvidencia = $idEvidencia;
            $this->titulo = $titulo;
            $this->descripcion= $descripcion;
            $this->idtipoEvidencia = $idtipoEvidencia;
            $this->fechaCreacion = $fechaCreacion;
            $this->fechaRegistroEvidencia = $fechaRegistroEvidencia;
            $this->idAutor = $idAutor;
            $this->observacion = $observacion;
            $this->estado = $estado;
            $this->idcapitulo = $idcapitulo;
            $this->seccion = $seccion;
            $this->articulo = $articulo;
            $this->literal = $literal;
            $this->numeral = $numeral;
            $this->paragrafo = $paragrafo;
            $this->latitud = $latitud;
            $this->longitud = $longitud;
        }

        //****************Getters and Setters****************\\
        
        //1
        function getIdEvidencia(){
                return $this->idEvidencia;
            }
            function setIdEvidencia($idEvidencia){
                $this->idEvidencia = $idEvidencia;
            }
        //2

            function getTitulo(){
                return $this->titulo;
            }
            function setTitulo($titulo){
                $this->titulo = $titulo;
            }
        //3

            function getDescripcion(){
                return $this->descripcion;
            }
            function setDescripcion($descripcion){
                $this->descripcion = $descripcion;
            }
        //4

            function getIdTipoEvidencia(){
                return $this->idtipoEvidencia;
            }
            function setIdTipoEvidencia($idtipoEvidencia){
                $this->idtipoEvidencia = $idtipoEvidencia;
            }
        //5

            function getFechaCreacion(){
                return $this->fechaCreacion;
            }
            function setFechaCreacion($fechaCreacion){
                $this->fechaCreacion = $fechaCreacion;
            }
        //6
        function getFechaRegistroEvidencia(){
                return $this->fechaRegistroEvidencia;
            }
            function setFechaRegistroEvidencia($fechaRegistroEvidencia){
                $this->fechaRegistroEvidencia = $fechaRegistroEvidencia;
            }

        //7
        function getIdAutor(){
                return $this->idAutor;
            }
            function setIdAutor($idAutor){
                $this->idAutor = $idAutor;
            }

        //8
        function getObservacion(){
                return $this->observacion;
            }
            function setObservacion($observacion){
                $this->observacion = $observacion;
            }

        //9
        function getEstado(){
                return $this->estado;
            }
            function setEstado($estado){
                $this->estado = $estado;
            }

        //10
        function getIdCapitulo(){
                return $this->idcapitulo;
            }
            function setIdCapitulo($idcapitulo){
                $this->idcapitulo = $idcapitulo;
            }

        //11
        function getSeccion(){
                return $this->seccion;
            }
            function setSeccion($seccion){
                $this->seccion = $seccion;
            }

        //12
        function getArticulo(){
                return $this->articulo;
            }
            function setArticulo($articulo){
                $this->articulo = $articulo;
            }

        //13
        function getLiteral(){
                return $this->literal;
            }
            function setLiteral($literal){
                $this->literal = $literal;
            }

        //14
        function getNumeral(){
                return $this->numeral;
            }
            function setNumeral($numeral){
                $this->numeral = $numeral;
            }
        //15
        function getParagrafo(){
                return $this->paragrafo;
        }
        function setParagrafo($paragrafo){
                $this->paragrafo = $paragrafo;
        }   
        //16
        function getLatitud(){
                return $this->latitud;
        }
        function setLatitud($latitud){
                $this->latitud = $latitud;
        }
        //17
        function getLongitud(){
                return $this->longitud;
        }
        function setLongitud($longitud){
                $this->longitud = $longitud;
        }
            
}
?>