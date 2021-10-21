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


$insert = $conection->prepare("INSERT INTO 
        datosequipos(dap_sis, tip_eq, modl_eq, marca_eq, noSerie_eq, modl_mothb,socket_mothb, pVideo_mothb,
        pPCI_mothb, noRAM_mothb, noPNVMe_mothb, modl_procdr, vel_procdr, cap_dsk, type_dsk, capa_RAM, vel_RAM,
        graficos, modl_sourcepw, monitor, keyboard, timeUse_monitor, timeUse_kybrd, mouse, timeUse_mouse,
        dvd_cd, sd, dir_IP, MAC_et, MAC_wifi, observaciones, sopor, max_RAM, soprt_graph, user)
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $insert->bindParam(1, $_REQUEST['DAP-SIS']);
        $insert->bindParam(2, $_REQUEST['type_eq']);
        $insert->bindParam(3, $_REQUEST['modl_eq']);
        $insert->bindParam(4, $_REQUEST['marca_eq']);
        $insert->bindParam(5, $_REQUEST['noSerie_eq']);
        $insert->bindParam(6, $_REQUEST['modl_tarjeta']);
        $insert->bindParam(7, $_REQUEST['typeSocket_tarjeta']);
        $insert->bindParam(8, $_REQUEST['puertos_video']);
        $insert->bindParam(9, $_REQUEST['puertos_PCI']);
        $insert->bindParam(10, $_REQUEST['no_RAM']);
        $insert->bindParam(11, $_REQUEST['noPuertos_NVMe']);
        $insert->bindParam(12, $_REQUEST['modl_proce']);
        $insert->bindParam(13, $_REQUEST['vel_proce']);
        $insert->bindParam(14, $_REQUEST['capa_disk']);
        $insert->bindParam(15, $_REQUEST['type_disk']);
        $insert->bindParam(16, $_REQUEST['capa_RAM']);
        $insert->bindParam(17, $_REQUEST['vel_RAM']);
        $insert->bindParam(18, $_REQUEST['graph_integrados']);
        $insert->bindParam(19, $_REQUEST['modl_fuente']);
        $insert->bindParam(20, $_REQUEST['modl_monitor']);
        $insert->bindParam(21, $_REQUEST['time_used_monitor']);
        $insert->bindParam(22, $_REQUEST['keyborad']);
        $insert->bindParam(23, $_REQUEST['time_used_keyborad']);
        $insert->bindParam(24, $_REQUEST['modl_mouse']);
        $insert->bindParam(25, $_REQUEST['time_used_mouse']);
        $insert->bindParam(26, $_REQUEST['dvd_sd']);
        $insert->bindParam(27, $_REQUEST['SD']);
        $insert->bindParam(28, $_REQUEST['IP']);
        $insert->bindParam(29, $_REQUEST['obs']);
        $insert->bindParam(30, $_REQUEST['MAC_ethnet']);
        $insert->bindParam(31, $_REQUEST['MAC_wifi']);
        $insert->bindParam(32, $_REQUEST['suport_proces']);
        $insert->bindParam(33, $_REQUEST['suport_RAM']);
        $insert->bindParam(34, $_REQUEST['suport_graph']);
        $insert->bindParam(35, $_REQUEST['user']);

        
        if($insert->execute() == true){
            echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href ='../alta_equipos.php';</script>";
            }
    
        else{
            echo "<script languaje='javascript'>alert('Registro Fallido'); location.href ='../alta_equipos.php';</script>";
        }

        


?>








