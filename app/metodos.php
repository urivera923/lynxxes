<?php
    class metodosPadre
    {
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
                return $result = mysqli_query($conexion, $sql);
            }
        }

        public function iniciarSesion($usuario, $password)
        {
            $c = new Conectar();
            $conexion = $c->conexion();

            $sql = "SELECT * FROM usuarios WHERE nombre = '$usuario' AND password = '$password'";
            print_r($sql);
            // $respuesta = mysqli_query($conexion, $sql);
            // $filas = mysqli_fetch_array($respuesta);
            // print_r($filas);
            // if ($filas['rol_id'] == 1) {
            //     header('location:../../Crud/indexAdmin.php');
            // } else if ($filas['rol_id'] == 2) {
            //     header('location:../../Crud/index.php');
            // } else {
            //     header('location:../../Login/error.php');
            // }
        }
    }
?>