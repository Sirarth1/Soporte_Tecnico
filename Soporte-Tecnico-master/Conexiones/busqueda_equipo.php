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
    if (isset($_POST['buscar'])) {
        $var = $_REQUEST['dap'];
        $sql = "SELECT tip_eq, modl_eq, marca_eq, noSerie_eq, type_dsk, capa_RAM FROM datosequipos WHERE dap_sis= '$var' ";
        $consulta = $conection->query($sql);
        $resultado = $consulta->fetch();
        $valores['existe'] = 0;
        if($consulta->execute() == true){
            $valores['existe'] = "1";
            $valores['tip_eq'] = $resultado['tip_eq'];
            $valores['modl_eq'] = $resultado['modl_eq'];
            $valores['marca_eq'] = $resultado['marca_eq'];
            $valores['noSerie_eq'] = $resultado['noSerie_eq'];
            $valores['type_dsk'] = $resultado['type_dsk'];
            $valores['capa_RAM'] = $resultado['capa_RAM'];
            $valores = json_encode($valores);
            echo $valores;
        }
        else{
            echo "Error en la busqueda, no se ha encontrado el equipo buscado";
        }
    }
    else {
        echo "Holi2 uwu";
    }
       
        


?>