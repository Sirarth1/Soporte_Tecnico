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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú Desplegable | Html-Css</title><!-- titulo  ------->
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
                   <li><a href="alta_equipos.html">Alta de equipos<i class="icon-abajo2"></i></a> </li>
                   <li><a href="alta_reporte.html">Alta de Reportes</a></li>
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
                <h1>Alta de equipos</h1> <br>
                <h3>Rellena los campos necesarios para registra un nuevo equipo</h2> 
                <br>
                <h2>Informacion Gneral</h2>
                <form action="Conexiones/registro_equipos.php" class="form-colum-4" method="post">
                    <p><label for="">No.DAP-SIS</label>
                    <input type="text" name="DAP-SIS" id=""></p>
                    <P><label for="">Tipo de equipo</label>
                    <select name="type_eq" id="" >
                        <option value="PC">PC</option>
                        <option value="LAPTOP">Laptop</option>
                        <option value="NOTEBOOK">Notebook</option>
                        <option value="IMPRESORA">Impresora</option>
                        <option value="FOTOCOPIADORA">Fotocopiadora</option>
                    </select></P>
                    
                    <p><label for="">Modelo del equipo</label>
                    <input type="text" name="modl_eq" id="" placeholder="Ejemplo: HP-JK48000."></p>
                    <p><label for="">Marca</label>
                    <input type="text" name="marca_eq" id="" placeholder="Ejemplo: Lenovo, HP, Acer, etc."></p>
                    <p><label for="">Numero de serie</label>
                    <input type="text" name="noSerie_eq" id=""></p>

                

                <h2>Datos de la targeta madre</h2> 
                
                <!--Datos tarjeta madre-->
                    <p><label for="">Modelo: </label> 
                    <input type="text" name="modl_tarjeta" id="" placeholder="Ejemplo: Aorus Micro ATX B550M."> </p>
                    <p><label for="">Tipo de Socket:</label>
                    <input type="text" name="typeSocket_tarjeta" id="" placeholder="AM4."></p>
                    <p><label for="">Puertos de video:</label>
                    <input type="text" name="puertos_video" id="" placeholder="Ejemplo: 2 Hdmi, 1 VGA."></p>
                    <p><label for="">Puertos PCI</label>
                    <input type="text" name="puertos_PCI" id="" placeholder="Ejemplo: 2 puertos PCI y 1 PCE-2.0."></p>
                    <p><label for="">Ranuras ram</label>
                    <select name="no_RAM" id="">
                        <option value="1 ranura">1 Ranura RAM</option>
                        <option value="2 ranuras">2 Ranura RAM</option>
                        <option value="4 ranuras">4 Ranura RAM</option>
                    </select></p>
                    <p><label for="">Puerto NVME</label>
                    <input type="text" name="noPuertos_NVMe" id=""></p>
                <!--Fin datos tarjeta madre--> 
                <br><br>
                <!--Datos del procesador-->
                    <h2>Datos del Procesador</h2>
                    
                    <p><label for="">Modelo del procesador</label>
                    <input type="text" name="modl_proce" id="" placeholder="Ejemplo: i7-10700k."></p>
                    <p><label for="">Velocidad del procesador</label>
                    <input type="text" name="vel_proce" id="" placeholder="Ejemplo: 4.10 GHZ."></p>
                <!--fin datos del procesador-->
                <br><br>
                <!--Inicio datos almacenamieno disco/ssd y ram-->
                <h2>Almacenamiento </h2>
                
                    <p><label for="">Capacidad de Almacenamiento</label>
                    <input type="text" name="capa_disk" id="" placeholder="Ejemplo: 250GB o 520GB o 1TB."></p>
                    <p><label for="">Tipo de disco</label>
                        <select name="type_disk" id="">
                            <option value="HHD">Disco Duro</option>
                            <option value="SSD">SSD</option>
                        </select></p>
                    <p><label for="">Capacidad de la memoria RAM</label>
                    <select name="capa_RAM" id="">
                        <option value="4GB">4GB</option>
                        <option value="8GB">8GB</option>
                        <option value="16GB">16GB</option>
                        <option value="32GB">32GB</option>
                    </select></p>
                    <p><label for="">Velocidad de la RAM</label>
                    <input type="text" name="vel_RAM" id="" placeholder="Ejemplo: 1600Mhz o 2666Mhz o 3200Mhz."></p>
                <!--in datos almacenamieno disco/ssd y ram-->
                <br><br>
                <!--Inicio de otro tipo de especificaciones del equipo-->
                <h2>Otros datos del equipo</h2>
            
                    <p><label for="">Modelo de graficos integrados/dedicados</label>
                    <input type="text" name="graph_integrados" id="" placeholder="Ejemplo: Gtx 2060 o Radeon Vega 8."></p>
                    <p><label for="">Modelo de la fuente de poder</label>
                    <input type="text" name="modl_fuente" id="" placeholder="Ejemplo: Evga 600 W1 black 100V/240V."></p>
                    <p><label for="">Monitor</label>
                    <input type="text" name="modl_monitor" id="" placeholder="Ejemplo: HP, Samsung, etc."></p>  
                    <p><label for="">Tiempo de uso</label>
                    <select name="time_used_monitor" id="">
                        <option value="menor a 1 año">menor a 1 año</option>
                        <option value="de 1 a 3 años">de 1 a 3 años</option>
                        <option value="de 3 a 6 años">de 3 a 6 años</option>
                        <option value="mayor a 6 años">mayor a 6 años</option>
                    </select></p>
                    <p><label for="">Teclado</label>
                    <input type="text" name="keyborad" id="" placeholder="Ejemplo: De frabrica, DELL, Lenovo, etc."></p>
                    <p><label for="">Tiempo de uso</label>
                        <select name="time_used_keyborad" id="">
                            <option value="menor a 1 año">menor a 1 año</option>
                            <option value="de 1 a 3 años">de 1 a 3 años</option>
                            <option value="de 3 a 6 años">de 3 a 6 años</option>
                            <option value="mayor a 6 años">mayor a 6 años</option>
                        </select></p>
                    <p><label for="">Mouse</label>
                    <input type="text" name="modl_mouse" id="" placeholder="Ejemplo: De fabrica, Lenovo, hp, logitech, etc."></p>
                    <p><label for="">Tiempo de uso</label>
                        <select name="time_used_mouse" id="">
                            <option value="menor a 1 año">menor a 1 año</option>
                            <option value="de 1 a 3 años">de 1 a 3 años</option>
                            <option value="de 3 a 6 años">de 3 a 6 años</option>
                            <option value="mayor a 6 años">mayor a 6 años</option>
                        </select></p>
                    
                    <p>
                    <label for="" class="ss">Lector dvd/cd</label>
                    <input type="checkbox" name="dvd_sd" id=""></p>
                    <p>
                    <label for="" class="ss">Lector de Targetas SD</label>
                    <input type="checkbox" name="SD" id=""></p>
                    <p></p><p></p>
                    <p class="text"><label for="">Observaciones del equipo</label>
                        <textarea name="obs" id="" cols="30" rows="10"></textarea>
                        </p>
                <!--fin de otro tipo de especificaciones del equipo-->
                <br><br>
                <!--Inicio de la informacion logica del equipo-->
                <h2>Informacion logica del equipo</h2>
                    <p><label for="">Direccion IP</label>
                    <select name="IP" id="">
                        <option value="">Seleccione una IP</option>
                    <?php
                        $sql = 'SELECT id_IP, IP FROM ips';
                        foreach ($conection->query($sql) as $row) {
                            echo  "<option value='$row[id_IP]'>$row[IP]</option>";
                        }
            
                    ?>
                    </select></p>
                        
                    <p><label for="">Direccion MAC Ethernet</label>
                    <input type="text" name="MAC_ethnet" id=""></p>
                    <p><label for="">Direccion MAC Wifi</label>
                    <input type="text" name="MAC_wifi" id=""></p>
                
                <!--fin de la informacion logica del equipo-->
                <!--Inicio del formulario responsables-->
                <h2>Datos de los responsables</h2>
              
                    <p class="colu2"><label for="">Usuario</label>
                    <select name="user" id="">
                    <?php
                        $sql = 'SELECT user FROM usuarios';
                        foreach ($conection->query($sql) as $row) {
                            echo  "<option value='$row[user]'>$row[user]</option>";
                        }
            
                    ?> 
                    </select></p>
                    </label>
                    <p class="colu2"><label for="">Area</label>
                    <input type="text" name="area" id=""></p>
                        <input type="button" value=""  id="btn-abrir-popupus" class="btn-abrir-popup" placeholder="dsdfs"> nuevo usuario
                    <p class="colu2"><label for="">Responsables</label>
                    <select name="respons" id="">
                    <?php
                        $sql = 'SELECT id_respons, nom_respons FROM responsables';
                        foreach ($conection->query($sql) as $row) {
                            echo  "<option value='$row[id_respons]'>$row[nom_respons]</option>";
                        }
            
                    ?>
                    </select></p>
                        <input type="button" value="" id="btn-abrir-popup" class="btn-abrir-popup"> nuevo responsable
                    <p class="colu2"><label for="">Cargo</label>
                    <input type="text" name="cargo" id=""></p>
                <!--Fin del formulario responsables-->
                    


                <!--inicio del area de actualizacion de equipos-->
                <h2>Datos para futura actualizacion del equipo</h2> <br>
                <h4>Esta area tiene como objetivo llenarse con componentes compatibles con el equipo con el fin de actualizar en un futuro de ser necesario. 
                    En caso de no contar con la informaicon, dejar los campos en blanco.</h4>
                
                    <p class="text"><label for="" >Procesadores soportados</label>
                    <textarea name="suport_proces" id="" cols="10" rows="10" ></textarea></p>
                    <p class="text"><label for="">Ram soprtada</label>
                    <textarea name="suport_RAM" id="" cols="30" rows="10"></textarea></p>
                    <p class="text"><label for="">Graficos soportados</label>
                    <textarea name="suport_graph" id="" cols="30" rows="10"></textarea></p>
                    <button class="btn">Finalizar Registro</button> 
                </form>

            

                <!--fin del area de actualizacion de equipos-->
                <p>
                    <label for="">
                Unidad de almacenamieno <br>
                    La actualizacion de las unidades de almacenamieno se debe dar a de la siguiente matera:
                    Si la unidad cuenta con un Disco duro HDD cambiar por una unidad de Almacenamiento SSD
                    Si la unidad cuenta con una unidad de almacenamieno SSD cambiar por una unida NVMe en caso de contar con el puerto de conexion.
                    Si el problema es el almacenamieno agregar unidades HDD pero con la condiciond de dejar la unidad SSD como principal, 
                    en su defecto adquirir discos duros externos o contar con un almacenamiento den la nuve
                
                    </label>
                </p>
                <br>
                <P>
                    <label for="">
                
                    Fuente de poder <br>
                    Usualmente la que viene con la pc es suficiente, en caso de actualización de procesador y tarjeta gráfica, verificar la 
                    sumatoria del consumo de energía total del equipo. De no ser soportado por la fuente de poder, cambiar a una de mayor capacidad con certificación 80 plus.
                
                    </label>
                </P>
            
                
            </div>
            
                       <!--Seccion de prueba del fromulairo emergente-->
                   
                   <div>
                       <p>
                        
                
                
                    <div class="overlay" id="overlay">
                        <div class="popup" id="popup">
                            <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times">X</i></a>
                            <h3>Nuevo responsable</h3>
                            <form action="">
                                <div class="contenedor-inputs">
                                    <input type="text" placeholder="Area">
                                    <input type="text" placeholder="Nombre">
                                    <input type="text" placeholder="Cargo">
                                    <input type="submit" class="btn-submit" value="Registrar">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                
                    <div class="overlay" id="overlayus">
                        <div class="popup" id="popupus">
                            <a href="#" id="btn-cerrar-popupus" class="btn-cerrar-popup"><i class="fas fa-times">X</i></a>
                            <h3>Nuevo Usuario</h3>
                        
                            <form action="">
                                <div class="contenedor-inputs">
                                    <input type="text" placeholder="Usuario nuevo">
                                    <input type="submit" class="btn-submit" value="Registrar">
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </p>
            </div>    
            
            <!--fin de prueba del fromulairo emergente-->
    
        </div>
    </div>
    <button id="btn-abrir-popupus" class="btn-abrir-popup">Nuevo Usuario</button>
                
    <button id="btn-abrir-popup" class="btn-abrir-popup">Nuevo responsable</button>
    

    <footer>
        <img src="https://www.atencionciudadana.cdmx.gob.mx/src/img/logo.svg" alt="">
        <h5><p>Sistema de Atencion Ciudadana de Alumbrado Publico
            <br> Diseñado y Operado por Area de Desarrollo y Control de Sistemas de la Informacion<br></p></h5>
    </footer>
    <script src="js/popup.js"></script>
    
    
</body>
</html>