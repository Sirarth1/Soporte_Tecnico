<?php
    function conectar(){
        $servername="localhost";
        $username="root";
        $database="soportetecnico2";
        $pass="";
        $sql="mysql:host=$servername; dbname=$database";
        $dsn_Options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
        try {
            $conection = new PDO($sql, $username, $pass, $dsn_Options);
            return $conection;
        } catch (PDOException $error) {
            echo 'Error en la conexión' .$error->getMessage();
        }
        
    }


?>