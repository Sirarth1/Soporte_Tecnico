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

   
        <div class="contact-wrapper">
            <div class="contact-form">
                <div class="caja">
                    <h1>Area de Registro</h1>
                    <form action="Conexiones/busqueda_equipo.php" method="post">
                        <input type="text" name="dapsis" id="" placeholder="Ingrese la DAP-SIS que desea encontrar">
                        
                        <button class="btn">Buscar</button> 
                    </form>
                    
                    <form action="">
                       
                        
                        <P><label for="">Tipo de equipo</label>
                        <input type="text" name="" id=""></p>
                        <p><label for="">Modelo del equipo</label>
                        <input type="text" name="" id=""></p>
                        <p><label for="">Marca</label>
                        <input type="text" name="" id=""></p>
                        <p><label for="">Numero de serie</label>
                        <input type="text" name="" id=""></p>
                        <p><label for="">Almacenamiento</label>
                        <input type="text" name="" id=""></p>
                        <p><label for="">RAM</label>
                        <input type="text" name="" id=""></p>
                        <p><label for="">¿Quien Reporta?</label>
                        <input type="text" name="" id=""></p>
                        <p><label for="">Fecha del reporte</label>
                        <input type="date" name="" id="">
                        <p></p>
                        <div class="espacio3">
                        <p><label for="">Observaciones del reporte</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Indica las problematicas que presento el equipo."></textarea></p>
                        
                        </div>
                        <button>Reportar</button>
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