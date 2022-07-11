<?php

    include_once('../Config/config.php');

    class Usuario{

        public function consultarUsuario($email){
            $query = "select * from login l
            inner join usuarios u on l.id_usuario = u.id_usuario
            where l.email = '$email'";
            
            $db = new ConexionPGSQL();
            $conn = $db->conectar();

            if($conn){
                $result = pg_query($conn,$query);
                $r = pg_fetch_array($result, NULL, PGSQL_ASSOC);
            }else{
                $r = array("error"=>"Error en la conexión a la Base de Datos");
            }
            return $r;

        }

        public function intentoFallido($email){
            $query = "update login set intentos = nextval('login_intentos_seq') where email = '$email'";
            
            $db = new ConexionPGSQL();
            $conn = $db->conectar();

            if($conn){
                $result = pg_query($conn,$query);
                $r = pg_fetch_array($result, NULL, PGSQL_ASSOC);
            }else{
                $r = array("error"=>"Error en la conexión a la Base de Datos");
            }
            return $r;

        }

        public function bloquearUsuario($id_usuario){
            $query = "update usuarios set id_estatus = 3 where id_usuario = '$id_usuario'";
            
            $db = new ConexionPGSQL();
            $conn = $db->conectar();

            if($conn){
                $result = pg_query($conn,$query);
                $r = pg_fetch_array($result, NULL, PGSQL_ASSOC);
            }else{
                $r = array("error"=>"Error en la conexión a la Base de Datos");
            }
            return $r;

        }

        public function registrarLogin($email){
            $query = "update login set ultimo_ingreso = now() where email = '$email'";
            
            $db = new ConexionPGSQL();
            $conn = $db->conectar();

            if($conn){
                $result = pg_query($conn,$query);
                $r = pg_fetch_array($result, NULL, PGSQL_ASSOC);
            }else{
                $r = array("error"=>"Error en la conexión a la Base de Datos");
            }
            return $r;

        }


    }

?>