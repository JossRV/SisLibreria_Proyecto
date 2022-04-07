<?php
        class Conexion{
            public function conectar(){
                $servidor = "localhost";
                $usuario = "root";
                $password = "";
                $bd = "Fundamentos" ;

                $conexion = new mysqli($servidor,$usuario, $password, $bd);

                return $conexion;
            }
        }
        $obj= new Conexion();
        if ($obj->conectar()) {
            echo "conexion correcta";
        }else{
            echo "no hay conexion";
        }
    ?>