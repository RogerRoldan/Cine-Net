<?php
    session_start();
    function conectar(){
        try{
            $conectar= new PDO('pgsql:host=localhost;dbname=cinenet', 'postgres', 'postgres') or die ("Error de Conexion".pg_last_error());
            return $conectar;
          }catch(Exception $e){
            echo "Error" + $e;
        }
    }
?>