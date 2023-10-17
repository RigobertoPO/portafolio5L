<?php
    class Usuario{
        //para el logueo 
        public function AutenticaUsuario($correo,$password){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM usuarios
            WHERE CorreoElectronico=:correo AND Password=:password");
            $consulta->bindParam(":correo",$correo,PDO::PARAM_STR);
            $consulta->bindParam(":password",$password,PDO::PARAM_STR);
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }
        public function InsertarUsuario($nombre,$correo,$password,$tipo){
            try {
                include '../conexion.php';
                $conexion=new Conexion();
                $consulta=$conexion->prepare("INSERT INTO usuarios(NombreCompleto,
                CorreoElectronico,Password,Tipo,FechaRegistro)VALUES(:nombre,:correo,
                :password,:tipo,NOW()");
                $consulta->bindParam(':nombre',$nombre, PDO::PARAM_STR);
                $consulta->bindParam(':correo',$correo, PDO::PARAM_STR);
                $consulta->bindParam(':password',$password, PDO::PARAM_STR);
                $consulta->bindParam(':tipo',$tipo, PDO::PARAM_INT);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }       
        }
        public function ModificarUsuario($id,$nombre,$correo){
            try {
                include '../conexion.php';
                $conexion=new Conexion();
                $consulta=$conexion->prepare("UPDATE usuarios SET
                NombreCompleto =:nombre ,CorreoElectronico =:correo 
                 where Id=:id ");
                $consulta->bindParam(':nombre',$nombre, PDO::PARAM_STR);
                $consulta->bindParam(':correo',$correo, PDO::PARAM_STR);               
                $consulta->bindParam(':id',$id, PDO::PARAM_INT);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }       
        }
        public function EliminarUsuario($id){
            try {
                include '../conexion.php';
                $conexion=new Conexion();
                $consulta=$conexion->prepare("DELETE FROM usuarios WHERE Id=:id");            
                $consulta->bindParam(':id',$id, PDO::PARAM_INT);
                $consulta->execute();
                return true;
            } catch (Exception $e) {
                return false;
            }       
        }
        public function ObtenerUsuarios(){
            include '../conexion.php';
            $conexion=new Conexion();
            $consulta=$conexion->prepare("SELECT * FROM usuarios");
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();
        }
    }
?>