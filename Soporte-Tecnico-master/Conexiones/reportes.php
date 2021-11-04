<?php
    $servername="localhost";
    $username="root";
    $database="soportetecnico";
    $pass="";
    $sql="mysql:host=$servername; dbname=$database";
    $dsn_Options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    try {
        $conection = new PDO($sql, $username, $pass, $dsn_Options);
    } catch (PDOException $error) {
        echo 'Error en la conexión' .$error->getMessage();
    }
    $reportar = $conection->prepare("INSERT INTO reportes(dap, nom_reporta, fech_reporte, obser_reporte)
                                    VALUES (?,?,?,?)");
    //$reportar->bindParam(2, );
    //$reportar->bindParam(3, );
    //$reportar->bindParam(1, );
    //$reportar->bindParam(4, );


?>