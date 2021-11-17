<?php
    require('conexion.php');
    $conection = conectar();
    if (isset($_POST['buscar'])) {
        $var = $_POST['dap'];
        $valores = array();
        $sql = "SELECT id_info, tipo_equipo, modelo_equipo, marca, no_serie, id_ip FROM infogeneral WHERE No_Dapsis=$var";
        $consulta = $conection->query($sql);
        $resultado = $consulta->fetch();
        $valores['existe'] = "0";
        if($consulta->execute() == true){
            $id_infog=$resultado['id_info'];
            $sql2 = "SELECT capa_almacenamiento, capa_almacenamiento2, capa_ram, capa_ram2 FROM almacenamiento WHERE id_infog=$id_infog";
            $consulta2=$conection->query($sql2);
            $resultado2=$consulta2->fetch();
            if ($consulta2->execute() == true) {
                $valores['existe'] = "1";
                $valores['tipo_equipo'] = $resultado['tipo_equipo'];
                $valores['modelo_equipo'] = $resultado['modelo_equipo'];
                $valores['marca'] = $resultado['marca'];
                $valores['no_serie'] = $resultado['no_serie'];
                $valores['id_ip'] = $resultado['id_ip'];
                $valores['almac1'] = $resultado2['capa_almacenamiento'];
                $valores['almac2'] = $resultado2['capa_almacenamiento2'];
                $valores['ram1'] = $resultado2['capa_ram'];
                $valores['ram2'] = $resultado2['capa_ram2'];
            }           
        }
        $valores = json_encode($valores);
        echo $valores;
    }

?>