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
            $respuesta = mysqli_query($conexion, $sql);
            $filas = mysqli_fetch_array($respuesta);
            $_SESSION['session'] = true;
            $_SESSION['idUsuario'] = $filas['id_usuario'];
            $_SESSION['idRol'] = $filas['rol_id'];
            if ($filas['rol_id'] == 1) {
                header('location:../../Crud/indexAdmin.php');
            } else if ($filas['rol_id'] == 2) {
                header('location:../../Crud/index.php');
            } else {
                header('location:../../Login/error.php');
            }
        }

        public function idUsuario($sql)
        {
            $c = new conectar();
            $conexion=$c->conexion();
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }
        
        public function monstarDatos($sql)
        {
            $c=new conectar();
            $conexion=$c->conexion();
            $result = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function eliminarDatos($id)
        {
            $c = new conectar();
            $conexion=$c->conexion();

            $sql = "DELETE FROM t_imagenes WHERE id_imagen='$id'";
            return  $result = mysqli_query($conexion, $sql);
        }

        
        public function actualizarDatos($datos)
        {
            $c = new conectar();
            $conexion=$c->conexion();
            
            $sql = "UPDATE t_imagenes SET descripcion = '$datos[0]', fecha = '$datos[1]' WHERE id_imagen = '$datos[2]'
            AND rol_id = '$datos[3]'";
            return $resultado = mysqli_query($conexion, $sql);
        }

        public function insertarDatos($datos)
        {
            $c = new conectar();
            $conexion=$c->conexion();

            $sql = "INSERT INTO t_imagenes (imagen, descripcion, fecha, rol_id)
                    VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
            
            return $result = mysqli_query($conexion, $sql);
        }

        public function insertarDatosVideo($datos)
        {
            $c = new conectar();
            $conexion=$c->conexion();

            $sql = "INSERT INTO t_videos (video, descripcion, fecha, rol_id)
                    VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
            
            return $result = mysqli_query($conexion, $sql);
        }

        public function eliminarVideo($id)
        {
            $c = new conectar();
            $conexion=$c->conexion();

            $sql = "DELETE FROM t_videos WHERE id_video='$id'";
            return  $result = mysqli_query($conexion, $sql);
        }

    }
?>