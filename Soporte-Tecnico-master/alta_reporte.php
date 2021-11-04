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
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menù Desplegable | Html-Css</title><!-- titulo  ------->
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css"> <!--direccion/ruta de la hoja de estilos---->

</head>
<body><!-- cuerpo de l apgina-->
   <header class="header"><!-- cabecera -->
       <div class="container">
           <div class="logo">
                <img src="https://www.atencionciudadana.cdmx.gob.mx/src/img/logo.svg" alt="">
           </div>
           <nav class="menu"><!-- inicio de menu de navegacion -->
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="alta_equipos.php">Alta de equipos<i class="icon-abajo2"></i></a> </li>
                <li><a href="alta_reporte.php">Alta de Reportes</a></li>
                <li><a href="estado_reporte.html">Estado de reportes</a></li>
                <li><a href="accesos.html">Accesos</a></li>
            </ul>
           </nav>
       </div>
   </header>
<!-- Portada  
        
    
    ------->

   
        <div class="contact-wrapper">
            <div class="contact-form">
                <div class="caja">
                    <h1>Area de Registro</h1>
                    <form  method="post" class="">
                        <P><input type="text" name="dapsis" id="dapsis" placeholder="Ingrese la DAP-SIS que desea encontrar"></P>
                        <button class="btn" onclick="buscar()">Buscar</button>
                        <br>
                        <P><label for="">Tipo de equipo</label>
                        <input type="text" name="tip_eq" id="equipo" > </p>
                        <p><label for="">Modelo del equipo</label>
                        <input type="text" name="modl_eq" id="modelo"></p>
                        <p><label for="">Marca</label>
                        <input type="text" name="marca_eq" id="marca"></p>
                        <p><label for="">Numero de serie</label>
                        <input type="text" name="noSerie_eq" id="serie"></p>
                        <p><label for="">Almacenamiento</label>
                        <input type="text" name="almac_eq" id="almacenamiento"></p>
                        <p><label for="">RAM</label>
                        <input type="text" name="RAM_eq" id="ram"></p>
                        <p><label for="">¿Quien Reporta?</label>
                        <input type="text" name="nombre_reporta" id=""></p>
                        <p><label for="">Fecha del reporte</label>
                        <input type="date" name="fech_report" id="">
                        <p></p>
                        <div class="espacio3">
                        <p><label for="">Observaciones del reporte</label>
                        <textarea name="obser_reporte" id="" cols="30" rows="10" placeholder="Indica las problematicas que presento el equipo."></textarea></p>
                        </div>
                        <button type="button" name="">Reportar</button>
                    </form>
                </div>
            </div>
        </div>


    <footer>
        <img src="https://www.atencionciudadana.cdmx.gob.mx/src/img/logo.svg" alt="">
        <h5><p>Sistema de Atencion Ciudadana de Alumbrado Publico
            <br> Diseñado y Operado por Area de Desarrollo y Control de Sistemas de la Informacion<br></p></h5>
       
    </footer>
</body>
</html>

<script>
    function buscar(){
        dap = $("#dapsis").val();
        if (dap != "") {
            var consulta =
            {
                "buscar": "1",
                "dap": dap
            };
            $.ajax(
            {
                url: 'Conexiones/busqueda_equipo.php',
                data: consulta,
                type: 'POST',
                dataType: "json",
                beforeSend: function()
                {alert ('Enviando')},
                error: function()
                {alert ('Error')},
                success: function(valores)
                {
                    $("#equipo").val(valores.tip_eq);
                    $("#modelo").val(valores.modl_eq);
                    $("#marca").val(valores.marca_eq);
                    $("#serie").val(valores.noSerie_eq);
                    $("#almacenamiento").val(valores.type_dsk);
                    $("#ram").val(valores.capa_RAM);
                }

            })
        }
        else{
            alert("No dejé en blanco el campo 'DAP-SIS'")
        }
    }
</script>





