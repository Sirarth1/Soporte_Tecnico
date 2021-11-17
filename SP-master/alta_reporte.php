<?php
    require('conexiones/conexion.php');
    $conection = conectar();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
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
                            <li><a href="alta_equipo.php">Alta de equipos</a> </li>
                            <li class="active"><a href="alta_reporte.php">Alta de Reportes</a></li>
                            <li><a href="estado_reporte.php">Estado de reportes</a></li>
                            <li><a href="accesos.php">Accesos  </a ></li> 
                            <li><a href="inicio.php" class="navbar-brand">Menu Principal</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
    </div>

    <div class="container">
      
                    <h1>Area de Registro</h1>
                    
                        
                    
                    
                    <form method="POST">
                            <div class="form-group col-md-6" >
                                <input class="form-control " type="text" name="dap" id="dapsis" placeholder="Buscar por DAP-SIS"  onsubmit="buscar();">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="button" class="btn btn-success" onclick="buscar();" value="Buscar"></input>
                            </div>
                    
                    </form>
                            <div class="form-group col-md-6">
                                <label for="">Tipo de equipo</label>
                                <input class="form-control" type="text" name="tipo" id="tipo" >   
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Modelo del equipo</label>
                                <input class="form-control" type="text" name="modelo" id="modelo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Marca</label>
                                <input class="form-control" type="text" name="marca" id="marca">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Numero de serie</label>
                                <input class="form-control" type="text" name="serie" id="serie">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Almacenamiento</label>
                                <input class="form-control" type="text" name="alamcenamiento" id="almacenamiento">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">RAM</label>
                                <input class="form-control" type="text" name="ram" id="ram">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">¿Quien Reporta?</label>
                                <input class="form-control" type="text" name="nom_reporta" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Fecha del reporte</label>
                                <input class="form-control" type="date" name="fecha_reporte" id="">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="">Observaciones del reporte</label>
                                <textarea class="form-control" name="observaciones" id="observaciones" cols="30" rows="10" placeholder="Indica las problematicas que presento el equipo."></textarea>
                            </div>
                            
                    <form action="conexiones/registroReporte.php">
                            <div class="form-group col-md-3">
                                <button class="btn btn-success form" type="submit">Reportar</button>
                            </div>
                            
                        
                    </form>
                
            
    </div>
    <footer>
        <div class="container">
            <div class="row">
                
              
                    <p>Sistema de Atencion Ciudadana de Alumbrado Publico <br>
                        Diseñado y Operado por Area de Desarrollo y Control de Sistemas de la Informacion</p>
                
            </div>
        </div>
    </footer>

    <script>
    function buscar(){
        
        dap = $("#dapsis").val()
        if (dap != "") {
            var param =
            {
                "buscar": "1",
                "dap": dap
            };
            
            $.ajax(
            {
                data: param,
                dataType: 'json',
                url: 'conexiones/busqueda.php',
                type: 'post',
                error: function()
                {alert("El DAP-SIS: " + dap + " no existe");},
                success: function(valores)
                {   
                    document.getElementById("tipo").readOnly=true;
                    document.getElementById("modelo").readOnly=true;
                    document.getElementById("marca").readOnly=true;
                    document.getElementById("serie").readOnly=true;
                    document.getElementById("almacenamiento").readOnly=true;
                    document.getElementById("ram").readOnly=true;
                    $("#tipo").val(valores.tipo_equipo);
                    $("#modelo").val(valores.modelo_equipo);
                    $("#marca").val(valores.marca);
                    $("#serie").val(valores.no_serie);
                    if(valores.almac1 == ''){

                    }
                    $("#almacenamiento").val(valores.almac1 + ", " + valores.almac2);
                }

            })
        }
        else{
            alert("Ingrese el DAP-SIS")
        }
    }
</script>



    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    
</body>
</html>