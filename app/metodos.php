<?php 
    class metodosPadre{
        public function registroUsuario($datos)
        {
            $c = new Conectar();
            $conexion = $c->conexion();

            $sql = "INSERT INTO usuarios (nombre, password, rol_id)
            VALUES ('$datos[0]', '$datos[1]', '$datos[2]')";

            $verificar = "SELECT * FROM usuarios 
            WHERE nombre = '$datos[0]'";
            $verificar_usuario = mysqli_query($conexion, $verificar);

            if (mysqli_num_rows($verificar_usuario) > 0) {
                echo '<script type="text/JavaScript"> 
                        alert("!Erro¡, El nombre ya existe");
                        window.location = "../registrar.php";
                        </script>
                ';
            } else {
                return $result=mysqli_query($conexion, $sql);    
            }
        }

        public function iniciarSesion($usuario, $password)
        {
            $c = new Conectar();
            $conexion = $c->conexion();
            
            $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND password = '$password'";
            $respuesta = mysqli_query($conexion, $sql);
            // print_r($respuesta);
            $sq = mysqli_num_rows($respuesta);
            print_r($sq);
            // if (mysqli_num_rows($respuesta) > 0) {
           
            //     header('location:../../crud/index.php');
            //     }   else {
            //     header('location:../error.php');
            // }

        }
    }
?>
