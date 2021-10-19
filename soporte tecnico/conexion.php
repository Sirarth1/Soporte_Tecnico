<?php
$servername="localhost";
$username="root";
$database="soportetecnico";
$pass="";
$sql="mysql:host=$servername; dbname=$database";
$dsn_Options=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
try {
    $conection=new PDO($sql, $username, $pass, $dsn_Options);
} 
catch (PDOException $error) {
    echo 'Error en la conexión' .$error->getMessage();
}

$insert = $conection->prepare('INSERT INTO datosequipos(dap_sis, tip_eq, modl_eq, marca_eq, noSerie_eq, 
        modl_mothb,socket_mothb, pVideo_mothb, pPCI_mothb, noRAM_mothb, noPNVMe_mothb, modl_procdr, 
        vel_procdr, cap_dsk, type_dsk, capa_RAM, vel_RAM, graficos, modl_sourcepw, monitor, keyboard, 
        timeUse_monitor, timeUse_kybrd, mouse, timeUse_mouse, dvd_cd, sd, dir_IP, MAC_et, MAC_wifi, 
        observaciones, sopor, max_RAM, soprt_graph, user)
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

        $insert->bindParam(1, $_REQUEST['numdap_gen_conex2']);
        $insert->bindParam(2, $_REQUEST['tip_gen_conex2']);
        $insert->bindParam(3, $_REQUEST['mod_gen_conex']);
        $insert->bindParam(4, $_REQUEST['marc_gen_conex2']);
        $insert->bindParam(5, $_REQUEST['numse_gen_conex2']);
        $insert->bindParam(6, $_REQUEST['mod_tar_conex2']);
        $insert->bindParam(7, $_REQUEST['sock_tar_conex2']);
        $insert->bindParam(8, $_REQUEST['vidp_tar_conex2']);
        $insert->bindParam(9, $_REQUEST['PCIp_tar_conex2']);
        $insert->bindParam(10, $_REQUEST['RAMran_tar_conex2']);
        $insert->bindParam(11, $_REQUEST['NVMEp-tar_conex2']);
        $insert->bindParam(12, $_REQUEST['mod_pro_conex2']);
        $insert->bindParam(13, $_REQUEST['vel_pro_conex2']);
        $insert->bindParam(14, $_REQUEST['cap_alm_conex2']);
        $insert->bindParam(15, $_REQUEST['disc_alm_conex2']);
        $insert->bindParam(16, $_REQUEST['capram_alm_conex2']);
        $insert->bindParam(17, $_REQUEST['velram_alm_conex2']);
        $insert->bindParam(18, $_REQUEST['mod_otr_conex2']);
        $insert->bindParam(19, $_REQUEST['font_otr_conex2']);
        $insert->bindParam(20, $_REQUEST['moni_otr_conex2']);
        $insert->bindParam(21, $_REQUEST['uso_otr_conex2']);
        $insert->bindParam(22, $_REQUEST['tec_otr_conex2']);
        $insert->bindParam(23, $_REQUEST['uso2_otr2_conex2']);
        $insert->bindParam(24, $_REQUEST['mouse_otr_conex2']);
        $insert->bindParam(25, $_REQUEST['uso3_otr3_conex2']);
        $insert->bindParam(26, $_REQUEST['dvd_otr_conex2']);
        $insert->bindParam(27, $_REQUEST['tarSD_otr_conex2']);
        $insert->bindParam(28, $_REQUEST['dirip_log_conex2']);
        $insert->bindParam(29, $_REQUEST['observaciones']);
        $insert->bindParam(30, $_REQUEST['direth_log_conex2']);
        $insert->bindParam(31, $_REQUEST['dirwifi_log_conex2']);
        $insert->bindParam(32, $_REQUEST['proc_act_conex2']);
        $insert->bindParam(33, $_REQUEST['ram_act_conex2']);
        $insert->bindParam(34, $_REQUEST['graf_act_conex2']);
        $insert->bindParam(35, $_REQUEST['user']);

        
        if($insert->execute() == true){
            echo "<script languaje='javascript'>alert('Registro Exitoso'); location.href ='alta_equipos.html';</script>";
            }
    
        else{
            echo "<script languaje='javascript'>alert('Registro Fallido'); location.href ='alta_equipos.php';</script>";
        }

        


?>








