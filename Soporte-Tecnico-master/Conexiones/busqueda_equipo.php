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
        $var = $_REQUEST['dapsis'];
        $sql = "SELECT tip_eq, modl_eq, marca_eq, noSerie_eq, type_dsk, capa_RAM FROM datosequipos WHERE dap_sis= '$var' ";
        $consulta = $conection->query($sql);
        $resultado = $consulta->fetch();
        if($consulta->execute() == true){
            echo "$resultado[tip_eq]";
        }
        else{
            echo "Error en la busqueda, no se ha encontrado el equipo buscado";
        }
    
    


?>