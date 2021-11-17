<?php
    require('conexiones/conexion.php');
    $conection=conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div class="container">
        <br>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">Soporte Tecnico</a>

                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Inicio</a></li>
                            <li class="active"><a href="alta_equipo.php">Alta de equipos</a> </li>
                            <li><a href="alta_reporte.php">Alta de Reportes</a></li>
                            <li><a href="estado_reporte.php">Estado de reportes</a></li>
                            <li><a href="accesos.html">Accesos  </a ></li> 
                            <li><a href="inicio.php" class="navbar-brand">Menu Principal</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <div class="container">
    
    <h1>Alta de equipos</h1> 
        <h3>Rellena los campos necesarios para registra un nuevo equipo</h2> 
        
        <h2>Informacion General</h2>
        <form action="conexiones/registroEquipo.php" class="" method="POST">
            <div class="col-md-12">   
                <div class="form-group col-md-3">
                    <label  for="">No.DAP-SIS</label><br>
                    <input class="form-control" type="text" name="dapsis" id="">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Tipo de equipo</label> <br>
                        <select class="form-control" name="type_eq" id="" >
                            <option value="PC">PC</option>
                            <option value="LAPTOP">Laptop</option>
                            <option value="NOTEBOOK">Notebook</option>
                            <option value="IMPRESORA">Impresora</option>
                            <option value="FOTOCOPIADORA">Fotocopiadora</option>
                        </select> 
                </div>
                <div class="form-group col-md-3">
                    <label for="">Modelo del equipo</label><br>
                    <input class="form-control" type="text" name="model_eq" id="" placeholder="Ejemplo: HP-JK48000.">    
                </div>
                
                <div class="form-group col-md-3">
                    <label for="">Marca</label><br>
                    <input class="form-control" type="text" name="marca_eq" id="" placeholder="Ejemplo: Lenovo, HP, Acer, etc.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Numero de serie</label><br>
                    <input class="form-control" type="text" name="noSerie_eq" id="">
                </div>
            </div> 

            <div class="col-md-12">
                <h2>Datos de la tarjeta madre</h2> 
                
                <!--Datos tarjeta madre-->
                    <div class="form-group col-md-3"> 
                        <label for="">Modelo: </label> <br>
                        <input class="form-control" type="text" name="model_moth" id="" placeholder="Ejemplo: Aorus Micro ATX B550M."> 
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Tipo de Socket:</label><br>
                        <input class="form-control" type="text" name="typeSock_moth" id="" placeholder="AM4.">
                    </div>
                    <div class="form-group col-md-3">   
                        <label for="">Puertos de video:</label><br>
                        <input class="form-control" type="text" name="puertos_video" id="" placeholder="Ejemplo: 2 Hdmi, 1 VGA.">
                    </div>
                    <div class="form-group col-md-3">       
                        <label for="">Puertos PCI</label><br>
                        <input class="form-control" type="text" name="puertos_PCI" id="" placeholder="Ejemplo: 2 puertos PCI y 1 PCE-2.0.">
                    </div>
                    <div class="form-group col-md-3"> 
                        <label for="">Ranuras ram</label><br>
                        <select class="form-control" name="ranuras_RAM" id="">
                            <option value="UNA">1 Ranura RAM</option>
                            <option value="DOS">2 Ranura RAM</option>
                            <option value="CUATRO">4 Ranura RAM</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Puerto NVME</label><br>
                        <input class="form-control" type="text" name="puerto_NVMe" id="">
                    </div>
                    
                <!--Fin datos tarjeta madre--> 
                <!--Datos del procesador-->
            </div>
            <div class="col-md-12">
                    <h2>Datos del Procesador</h2>
                    <div class="form-group col-md-3">
                        <label for="">Modelo del procesador</label><br>
                        <input class="form-control" type="text" name="procesador_model" id="" placeholder="Ejemplo: i7-10700k.">
                    </div>
                    <div class="form-group col-md-3"> 
                        <label for="">Velocidad del procesador</label><br>
                        <input class="form-control" type="text" name="procesador_vel" id="" placeholder="Ejemplo: 4.10 GHZ.">
                    </div>
                    
            </div>       
                <!--fin datos del procesador-->
                <br><br>
                <!--Inicio datos almacenamieno disco/ssd y ram-->
            <div class="col-md-12">
                <h2>Almacenamiento </h2>
                    <div class="form-group col-md-3">
                        <label for="">Capacidad de Almacenamiento</label><br>
                        <input class="form-control" type="text" name="almac1" id="" placeholder="Ejemplo 1°: 250GB o 520GB o 1TB."><br>
                        <input class="form-control" type="text" name="almac2" id="" placeholder="Ejemplo 2°: 250GB o 520GB o 1TB.">    
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Tipo de disco</label> <br>
                            <select class="form-control" name="type_dsk1" id="">
                                <option value="HDD">Disco Duro</option>
                                <option value="SSD">SSD</option>
                                <option value="S/U" selected>Sin unidad</option>
                            </select> <br>
                            <select class="form-control" name="type_dsk2" id="">
                                <option value="HHD">Disco Duro</option>
                                <option value="SSD">SSD</option>
                                <option value="S/U" selected>Sin unidad</option>
                            </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Capacidad de la memoria RAM</label><br>
                            <select class="form-control" name="capa_RAM1" id="">
                                <option value="4GB">4GB</option>
                                <option value="8GB">8GB</option>
                                <option value="16GB">16GB</option>
                                <option value="16GB">32GB</option>
                                <option value="S/V" selected>Slot vacio</option>
                            </select> <br>
                            <select class="form-control" name="capa_RAM2" id="">
                                <option value="4GB">4GB</option>
                                <option value="8GB">8GB</option>
                                <option value="16GB">16GB</option>
                                <option value="16GB">32GB</option>
                                <option value="S/V" selected>Slot vacio</option>
                            </select>
                    </div>
                    <div class="form-group col-md-3"> 
                        <label for="">Velocidad de la RAM</label><br>
                        <input class="form-control" type="text" name="vel_RAM1" id="" placeholder="Ejemplo: 1600Mhz o 2666Mhz o 3200Mhz."><br>
                        <input class="form-control" type="text" name="vel_RAM2" id="" placeholder="Ejemplo: 1600Mhz o 2666Mhz o 3200Mhz.">
                    </div>
                <!--in datos almacenamieno disco/ssd y ram-->
                <!--Inicio de otro tipo de especificaciones del equipo-->
            </div>
            
            <div class="col-md-12">
                <h2>Otros datos del equipo</h2>
                <div class="form-group col-md-3">
                    <label for="">Graficos integrados/dedicados</label><br>
                    <input class="form-control" type="text" name="integer_graph" id="" placeholder="Ejemplo: Gtx 2060 o Radeon Vega 8.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Modelo de la fuente de poder</label><br>
                    <input class="form-control" type="text" name="ps_model" id="" placeholder="Ejemplo: Evga 600 W1 black 100V/240V.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Monitor</label><br>
                    <input class="form-control" type="text" name="monitor" id="" placeholder="Ejemplo: HP, Samsung, etc.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Tiempo de uso</label><br>
                        <select class="form-control" name="uso_monitor" id="">
                            <option value="MENOR A 1 AÑO">menor a 1 año</option>
                            <option value="DE 1 A 3 AÑOS">de 1 a 3 años</option>
                            <option value="DE 3 A 6 AÑOS">de 3 a 6 años</option>
                            <option value="MAYOR A 6 AÑOS">mayor a 6 años</option>
                        </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Teclado</label> <br>
                    <input class="form-control" type="text" name="teclado" id="" placeholder="Ejemplo: De frabrica, DELL, Lenovo, etc.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Tiempo de uso</label> <br>
                        <select class="form-control" name="uso_teclado" id="">
                            <option value="MENOR A 1 AÑO">menor a 1 año</option>
                            <option value="DE 1 A 3 AÑOS">de 1 a 3 años</option>
                            <option value="DE 3 A 6 AÑOS">de 3 a 6 años</option>
                            <option value="MAYOR A 6 AÑOS">mayor a 6 años</option>
                        </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="">Mouse</label><br>
                    <input class="form-control" type="text" name="mouse" id="" placeholder="Ejemplo: De fabrica, Lenovo, hp, logitech, etc.">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Tiempo de uso</label><br>
                        <select class="form-control " name="uso_mouse" id="">
                            <option value="MENOR A 1 AÑO">menor a 1 año</option>
                            <option value="DE 1 A 3 AÑOS">de 1 a 3 años</option>
                            <option value="DE 3 A 6 AÑOS">de 3 a 6 años</option>
                            <option value="MAYOR A 6 AÑOS">mayor a 6 años</option>
                        </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="ss">Lector dvd/cd</label>
                    <input class="form-control" type="checkbox" name="lector_dvd/sd" id="">
                </div>
                <div class="form-group col-md-3">
                    <label for="" class="ss">Lector de Tarjetas SD</label>
                    <input class="form-control" type="checkbox" name="lector_sd" id=""></p>
                </div>
                <div class="form-group col-md-12">
                    <p class="text">
                        <label for="">Observasiones del equipo</label><br>
                        <textarea class="form-control" name="observaciones" id="" cols="30" rows="10"></textarea>
                    </p>
                </div>

                <div>
                 <!--Inicio de la informacion logica del equipo-->
                <div class="col-md-12">
                <h2>Informacion lógica del equipo</h2>
                    <div class="form-group col-md-6">
                        
                        <label  for="">Direccion IP</label>
                        <select class="form-control" name="IP" id="">
                            <option value="">Seleccione una IP</option>
                            <?php
                                $sql = 'SELECT id_IP, IP, estado FROM ips';
                                foreach ($conection->query($sql) as $row) {
                                    if ($row['estado'] == 0) {
                                        echo "<option value='$row[id_IP]'>$row[IP]</option>";
                                    }
                                    
                                }
                    
                            ?>
                            </select>
                    </div>
                <div class="form-group col-md-6">
                    <label for="">Direccion MAC Ethernet</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Direccion MAC Wifi</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
               </div>
                
                
            
            <!--fin de la informacion logica del equipo-->
            <!--Inicio del formulario responsables-->
                </div>


               
            <!--fin de otro tipo de especificaciones del equipo-->
            <!--Inicio de la informacion logica del equipo-->
            </div>
            <div class="col-md-12">
                <h2>Datos de los responsables</h2>
                
                <div class="form-group col-md-6">
                    <label for="">Usuario</label> <br>
                    <select class="form-control" name="user" id="">
                    <option value="">Seleccione usuario</option>
                        <?php
                            $sql = 'SELECT id_usuario, nom_usuario FROM usuarios';
                            foreach ($conection->query($sql) as $row) {
                                echo  "<option value='$row[id_usuario]'>$row[nom_usuario]</option>";
                            }
                
                        ?> 
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Area</label> <br>
                    <input class="form-control" type="text" name="area" id="">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Responsables</label><br>
                    <select class="form-control" name="respons" id="">
                        <option value="">Seleccione responsable de área</option>
                        <?php
                            $sql = 'SELECT id_responsable, nom_responsable FROM responsables';
                            foreach ($conection->query($sql) as $row) {
                                echo  "<option value='$row[id_responsable]'>$row[nom_responsable]</option>";
                            }
                
                        ?>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Cargo</label> <br>
                    <input class="form-control" type="text" name="cargo" id="">
                </div>
               
                <div class="form-group col-md-3">
                    <input  type="button" value="Nuevo responsable"  id="btn-abrir-popupus" class="btn btn-success"> 
                </div>
                <div class="form-group col-md-3">
                    <input type="button" value="Nueva Usuario" id="btn-abrir-popup" class="btn btn-success">
                </div>
              
                <!--Fin del formulario responsables-->

            </div>
            <div class="col-md-12">
                <h2>Datos para futura actualizacion del equipo</h2> <br>
                <h4>Esta área tiene como objetivo llenarse con componentes compatibles con el equipo con el fin de actualizar en un futuro de ser necesario. 
                    En caso de no contar con la informaicon, dejar los campos en blanco.</h4>
                <div class="form-group col-md-4">
                    <label for="" >Procesadores soportados</label><br>
                    <textarea name="" id="" cols="48" rows="10" ></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Ram soprtada</label><br>
                    <textarea name="" id="" cols="48" rows="10"></textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Graficos soportados</label><br>
                    <textarea name="" id="" cols="48" rows="10"></textarea>
                </div>
                    
                   
                    
                                  
            </div>
          
            <button class="btn btn-success form">Registrar</button>
        </form>
    </div>



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
                                <input type="text" placeholder="Area">
                                <input type="text" placeholder="Usuario nuevo">
                                <input type="submit" class="btn-submit" value="Registrar">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </p>
        </div>
        <br>
        <br>
        <br>

    <footer>
        <div class="container">
            <div class="row">
                
              
                    <p>Sistema de Atencion Ciudadana de Alumbrado Publico <br>
                        Diseñado y Operado por Area de Desarrollo y Control de Sistemas de la Informacion</p>
                
            </div>
        </div>
    </footer>

    
    <script src="js/popup.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>