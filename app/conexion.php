<?php 
    class Conectar{
        private $servidor = "localhost";
        private $usuario = "root";
        private $pass = "";
        private $bd = "lynxxxes";
        private $puerto = 3306;
        
        public function conexion(){
            $conexion = mysqli_connect(
                $this->servidor,
                $this->usuario,
                $this->pass,
                $this->bd,
                $this->puerto
            );
            return $conexion;
        }
    }

    $obj = new Conectar();
    if ($obj->conexion()) {
        // echo "Conexión con éxito";
    } else {
        echo "Fallo al conectar";
    }

   
?>