<?php

 require_once("conexion.php");
 class usuarios extends Conexion{  // IDEA: El nombre de la clase debe estar como se escribio anteriormente


        public function verusuarios(){
            $this-> sentencia = "SELECT * FROM usuarios";
            return $this-> obtener_sentencia();
        }

        public function registrousuario($nombre,$correo,$matricula){
        
            $this-> sentencia = "INSERT INTO usuarios (nombre,correo,matricula) values ('$nombre','$correo','$matricula')";
            $this-> ejecutar_sentencia();
        }

        public function eliminarusuario($id){
            $this-> sentencia = "DELETE FROM usuarios WHERE id = '$id'";
            $this-> ejecutar_sentencia();
        }

        public function verususario($id){
            $this-> sentencia = "SELECT * FROM usuarios WHERE id = '$id'";
            return $this-> obtener_sentencia();
        }

         public function actualizarusuario($nombre,$correo,$matricula,$id){
            $this-> sentencia = "UPDATE usuarios set nombre = '$nombre', correo='$correo', matricula='$matricula' WHERE id = '$id'";
            $this->ejecutar_sentencia();
        }

    }
    
    ?>