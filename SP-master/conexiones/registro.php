<?php
    require('conexion.php');
    $conection = conectar();
    $dap = $_REQUEST['dapsis'];
    $reg_general = $conection->prepare("INSERT INTO infogeneral (id_user, No_Dapsis, tipo_equipo, modelo_equipo, marca, no_serie, id_ips) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?) ");
    $reg_general->bindParam(1,$_REQUEST['user']);
    $reg_general->bindParam(2,$_REQUEST['dapsis']);
    $reg_general->bindParam(3, $_REQUEST['type_eq']);
    $reg_general->bindParam(4, $_REQUEST['model_eq']);
    $reg_general->bindParam(5, $_REQUEST['marca_eq']);
    $reg_general->bindParam(6, $_REQUEST['noSerie_eq']);
    $reg_general->bindParam(7,$_REQUEST['IP']);
    if($reg_general->execute() == true){
        if($_REQUEST['type_eq'] != 'IMPRESORA' || $_REQUEST['type_eq'] != 'FOTOCOPIADORA'){
            $consulta = "SELECT id_info FROM infogeneral WHERE No_Dapsis= $dap";
            $res = $conection->query($consulta);
            $resultado = $res->fetch();
            $id_infogeneral = $resultado['id_info'];
            $reg_datosequipos = $conection->prepare("INSERT INTO datosequipos (id_infog, modelo_tarjeta, tipo_socket, puertos_video, puertos_pci, 
                                                    ranuras_ram, puerto_nvme, mode_procesador, vel_procesador) 
                                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $reg_datosequipos->bindParam(1,$id_infogeneral);
            $reg_datosequipos->bindParam(2,$_REQUEST['model_moth']);
            $reg_datosequipos->bindParam(3,$_REQUEST['typeSock_moth']);
            $reg_datosequipos->bindParam(4,$_REQUEST['puertos_video']);
            $reg_datosequipos->bindParam(5,$_REQUEST['puerto_PCI']);
            $reg_datosequipos->bindParam(6,$_REQUEST['ranuras_RAM']);
            $reg_datosequipos->bindParam(7,$_REQUEST['puerto_NVMe']);
            $reg_datosequipos->bindParam(8,$_REQUEST['procesador_model']);
            $reg_datosequipos->bindParam(9,$_REQUEST['procesador_vel']);
            if($reg_datosequipos->execute() == true){
                $reg_almacenamiento = $conection->prepare("INSERT INTO almacenamiento (id_infog, capa_almenamiento, capa_almacenamiento2, 
                                                tipo_disco, tipo_disco2, capa_ram, capa_ram2, vel_ram, vel_ram2) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $reg_almacenamiento->bindParam(1,$id_infogeneral);
                $reg_almacenamiento->bindParam(2,$_REQUEST['almac1']);
                $reg_almacenamiento->bindParam(3,$_REQUEST['almac2']);
                $reg_almacenamiento->bindParam(4,$_REQUEST['type_dsk1']);
                $reg_almacenamiento->bindParam(5,$_REQUEST['type_dsk2']);
                $reg_almacenamiento->bindParam(6,$_REQUEST['capa_RAM1']);
                $reg_almacenamiento->bindParam(7,$_REQUEST['capa_RAM2']);
                $reg_almacenamiento->bindParam(8,$_REQUEST['vel_RAM1']);
                $reg_almacenamiento->bindParam(9,$_REQUEST['vel_RAM2']);
                if ($reg_almacenamiento->execute() == true){
                    $reg_otros = $conection->prepare("INSERT INTO otrosdatoseq (id_infog, graficos, mod_funtepoder, monitor, tiempo_monitor, teclado, 
                                                    tiempo_teclado, mouse, tiempo_mouse, lector_dvd, lector_sd) 
                                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                    $reg_otros->bindParam(1,$id_infogeneral);
                    $reg_otros->bindParam(2,$_REQUEST['integer_graph']);
                    $reg_otros->bindParam(3,$_REQUEST['ps_model']);
                    $reg_otros->bindParam(4,$_REQUEST['monitor']);
                    $reg_otros->bindParam(5,$_REQUEST['uso_monitor']);
                    $reg_otros->bindParam(6,$_REQUEST['teclado']);
                    $reg_otros->bindParam(7,$_REQUEST['uso_teclado']);
                    $reg_otros->bindParam(8,$_REQUEST['mouse']);
                    $reg_otros->bindParam(9,$_REQUEST['uso_mouse']);
                    $reg_otros->bindParam(9,$_REQUEST['uso_mouse']);
                    $reg_otros->bindParam(10,$_REQUEST['lector_dvd/sd']);
                    $reg_otros->bindParam(11,$_REQUEST['lector_sd']);
                }
            }
        }
        $reg_logico = $conection->prepare("");
        
    }


?>