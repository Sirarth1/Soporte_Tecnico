
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menù Desplegable | Html-Css</title><!-- titulo  ------->
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
<form action="conexion.php" method="post">
    <div class="contact-wrapper">
        <div class="contact-form">
            <div class="caja">
                <h1>Alta de equipos</h1> <br>
                <h3>Rellena los campos necesarios para registrar un nuevo equipo</h2> 
                <br>

                <h2>Información General</h2>
                
                

                
                <form method="post" class="form-colum-4">
                    <!-- llamaremos por nombre y no por identificador dentro del php pa la conexion usu-->
                    <p><label for="">No.DAP-SIS</label>
                    <input type="text" name="numdap_gen_conex2" id="" placeholder="DAP-SIS"></p>
                    <P><label for="">Tipo de equipo</label>
                    <select name="tip_gen_conex2" id="" >
                        <option value="PC">PC</option>
                        <option value="LAPTOP">Laptop</option>
                        <option value="NOTEBOOK">Notebook</option>
                        <option value="IMPRESORA">Impresora</option>
                        <option value="FOTOCOPIADORA">Fotocopiadora</option>
                    </select></P>
                    
                    <p><label for="">Modelo del equipo</label>
                    <input type="text" name="mod_gen_conex" id="" placeholder="Ejemplo: HP-JK48000."></p>
                    <p><label for="">Marca</label>
                    <input type="text" name="marc_gen_conex2" id="" placeholder="Ejemplo: Lenovo, HP, Acer, etc."></p>
                    <p><label for="">Número  de serie</label>
                    <input type="text" name="numse_gen_conex2" id=""></p>
                </form>

                <h2>Datos de la tarjeta madre</h2>

                <form method="post" class="form-colum-4">
                <!--Datos tarjeta madre-->
                    <p><label for="">Modelo: </label> 
                    <input type="text" name="mod_tar_conex2" id="" placeholder="Ejemplo: Aorus Micro ATX B550M."> </p>
                    <p><label for="">Tipo de Socket:</label>
                    <input type="text" name="sock_tar_conex2" id="" placeholder="AM4."></p>
                    <p><label for="">Puertos de video:</label>
                    <input type="text" name="vidp_tar_conex2" id="" placeholder="Ejemplo: 2 Hdmi, 1 VGA."></p>
                    <p><label for="">Puertos PCI</label>
                    <input type="text" name="PCIp_tar_conex2" id="" placeholder="Ejemplo: 2 puertos PCI y 1 PCE-2.0."></p>
                    <p><label for="">Ranuras RAM</label>
                    <input type="text" name="RAMran_tar_conex2" id="" placeholder="Ejemplo: 2 ranuras o 4 ranuras."></p>
                    <p><label for="">Puerto NVME</label>
                    <input type="text" name="NVMEp-tar_conex2" id=""></p>
                <!--Fin datos tarjeta madre--> 
                <br><br>
                <!--Datos del procesador-->
                </form>

                    <h2>Datos del Procesador</h2>
                    <form method="post" class="form-colum-4">
                    <p><label for="">Modelo del procesador</label>
                    <input type="text" name="mod_pro_conex2" id="" placeholder="Ejemplo: i7-10700k."></p>
                    <p><label for="">Velocidad del procesador</label>
                    <input type="text" name="vel_pro_conex2" id="" placeholder="Ejemplo: 4.10 GHZ."></p>
                </form>
                <!--fin datos del procesador-->
                <br><br>
                <!--Inicio datos almacenamieno disco/ssd y ram-->
                <h2>Almacenamiento </h2>
                <form method="post" class="form-colum-4">
                    <p><label for="">Capacidad de Almacenamiento</label>
                    <input type="text" name="cap_alm_conex2" id="" placeholder="Ejemplo: 250GB o 520GB o 1TB."></p>
                    <p><label for="">Tipo de disco</label>
                    <input type="text" name="disc_alm_conex2" id=""></p>
                    <p><label for="">Capacidad de la memoria RAM</label>
                    <input type="text" name="capram_alm_conex2" id="" placeholder="Ejemplo: 4GB o 8GB o 16GB."></p>
                    <p><label for="">Velocidad de la RAM</label>
                    <input type="text" name="velram_alm_conex2" id="" placeholder="Ejemplo: 1600Mhz o 2666Mhz o 3200Mhz."></p>
                </form>
                <!--fin datos almacenamieno disco/ssd y ram-->
                <br><br>
                <!--Inicio de otro tipo de especificaciones del equipo-->
                <h2>Otros datos del equipo</h2>
                <form method="post" class="form-colum-4">
                    <p><label for="">Modelo de gráficos integrados/dedicados</label>
                    <input type="text" name="mod_otr_conex2" id="" placeholder="Ejemplo: Gtx 2060 o Radeon Vega 8."></p>
                    <p><label for="">Modelo de la fuente de poder</label>
                    <input type="text" name="font_otr_conex2" id="" placeholder="Ejemplo: Evga 600 W1 black 100V/240V."></p>
                    <p><label for="">Monitor</label>
                    <input type="text" name="moni_otr_conex2" id="" placeholder="Ejemplo: HP, Samsung, etc."></p>  
                    <p><label for="">Tiempo de uso</label>
                    <select name="uso_otr_conex2" id="">
                        <option value="men1_otr">menor a 1 año</option>
                        <option value="1a3_otr">de 1 a 3 años</option>
                        <option value="3a6_otr">de 3 a 6 años</option>
                        <option value="may6_otr">mayor a 6 años</option>
                    </select></p>
                    <p><label for="">Teclado</label>
                    <input type="text" name="tec_otr_conex2" id="" placeholder="Ejemplo: De frabrica, DELL, Lenovo, etc."></p>
                    <p><label for="">Tiempo de uso</label>
                        <select name="uso2_otr2_conex2" id="">
                            <option value="men1_otr2">menor a 1 año</option>
                            <option value="1a3_otr2">de 1 a 3 años</option>
                            <option value="3a6_otr2">de 3 a 6 años</option>
                            <option value="may6_otr2">mayor a 6 años</option>
                        </select></p>
                    <p><label for="">Mause</label>
                    <input type="text" name="mouse_otr_conex2" id="" placeholder="Ejemplo: De fabrica, Lenovo, hp, logitech, etc."></p>
                    <p><label for="">Tiempo de uso</label>
                        <select name="uso3_otr3_conex2" id="">
                            <option value="men1_otr3">menor a 1 año</option>
                            <option value="1a3_otr3">de 1 a 3 años</option>
                            <option value="3a6_otr3">de 3 a 6 años</option>
                            <option value="may6_otr3">mayor a 6 años</option>
                        </select></p>
                    
                    <p>
                    <label for="" class="ss">Lector DVD/CD</label>
                    <input type="checkbox" name="dvd_otr_conex2" id=""></p>
                    <p>
                    <label for="" class="ss">Lector de Tarjetas SD</label>
                    <input type="checkbox" name="tarSD_otr_conex2" id=""></p>
                </form>
                <!--fin de otro tipo de especificaciones del equipo-->
                <br><br>
                <!--Inicio de la informacion logica del equipo-->
                <h2>Informacion logica del equipo</h2>
                <form method="post" class="form-colum-4">
                    <p><label for="">Dirección IP</label>
                    <select name="dirip_log_conex2" id="">
                        <option value="direccion1">192.168.100.1</option>
                        <option value="direccion2">192.168.100.1</option>
                    </select></p>
                    <p><label for="">Dirección MAC Ethernet</label>
                    <input type="text" name="direth_log_conex2" id=""></p>
                    <p><label for="">Dirección MAC Wifi</label>
                    <input type="text" name="dirwifi_log_conex2" id=""></p>
                </form>
                <!--fin de la informacion logica del equipo-->
                <!--Inicio del formulario responsables-->
                <!-- Va a cambiar de lugar uwu-->
                <h2>Datos de los responsables</h2>
                <form method="post" class="form-colum-2">
                    <p><label for="">Usuario</label>
                    <select name="" id="">
                        <option value="a">Usuario</option>
                    </select></p>
                    <p><label for="">Área</label>
                    <input type="text" name="" id=""></p>
                    <p><label for="">Responsables</label>
                    <select name="" id="">
                        <option value="b">Respons</option>
                    </select></p>
                    <p><label for="">Cargo</label>
                    <input type="text" name="" id=""></p>
                    
                    <p><label for="">Observaciones del equipo</label>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                    </p>
                    <p><br> <br>
                        <button>Nuevo usuario</button>
                        <br> <br> <br>
                        <button>Nuevo responsable</button></p>
                </form>
                
                <!--Fin del formulario responsables-->




                <!--inicio del area de actualizacion de equipos-->
                <h2>Datos para futura actualización del equipo</h2> <br>
                <h4>Esta área tiene como objetivo llenarse con componentes compatibles con el equipo con el fin de actualizar en un futuro de ser necesario. En caso de no contar con la información, dejar los campos en blanco.</h4>
                <form method="post">
                    <p><label for="">Procesadores soportados</label>
                    <textarea name="proc_act_conex2" id="" cols="10" rows="10"></textarea></p>
                    <p><label for="">RAM Max soportada</label>
                    <textarea name="ram_act_conex2" id="" cols="30" rows="10"></textarea></p>
                    <p><label for="">Graficos soportados</label>
                    <textarea name="graf_act_conex2" id="" cols="30" rows="10"></textarea></p>
                    
                </form>
                
                <!--fin del area de actualizacion de equipos-->
                <p>
                    <label for="">
                        Unidad de almacenamiento <br>
                La actualización de las unidades de almacenamiento se debe dar a de la siguiente matera: <br>
                Si la unidad cuenta con un Disco duro HDD cambiar por una unidad de Almacenamiento SSD. <br>
                Si la unidad cuenta con una unidad de almacenamiento SSD cambiar por una unida NVME en caso de contar con el puerto de conexión. <br>
                Si el problema es el almacenamiento agregar unidades HDD, pero con la condición de dejar la unidad SSD como principal, 
                en su defecto adquirir discos duros externos o contar con un almacenamiento den la nuve
                
                    </label>
                </p>
                <P>
                    <label for="">
                
                    Fuente de poder <br>
                    Usualmente la que viene con la PC es suficiente, en caso de actualización de procesador y tarjeta gráfica, verificar la 
                    sumatoria del consumo de energía total del equipo. De no ser soportado por la fuente de poder, cambiar a una de mayor capacidad con certificación 80 plus.
                
                    </label>
                </P>
            
                <button class="btn">Finalizar Registro</button>
            </div>
        </div>
    </div>
    </form>
</form>

    <footer>
        <img src="https://www.atencionciudadana.cdmx.gob.mx/src/img/logo.svg" alt="">
        <h5><p>Sistema de Atencion Ciudadana de Alumbrado Publico
            <br> Diseñado y Operado por Area de Desarrollo y Control de Sistemas de la Informacion<br></p></h5>
    </footer>
</body>
</html>