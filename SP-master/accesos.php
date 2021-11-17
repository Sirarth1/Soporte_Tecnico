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
                            <li><a href="alta_reporte.php">Alta de Reportes</a></li>
                            <li><a href="estado_reporte.php">Estado de reportes</a></li>
                            <li class="active"><a href="accesos.php">Accesos  </a ></li> 
                            <li><a href="inicio.html" class="navbar-brand">Menu Principal</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="contact-form">
                <h1>Control de Accesos</h1>
                    <form action="" class="">
                        <h1>Area de Registro</h1>
                        <div class="col-md-12">
                            <div class="form-group col-md-6">
                                    <label for="">Nombre Completo</label>
                                    <input class="form-control" type="text" name="" id=""> 
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Ingresa tu correo</label>
                                <input class="form-control" type="email" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Contraseña</label>
                                <input class="form-control " type="password" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Confirma tu contraseña</label>
                                <input class="form-control" type="password" name="" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Tipo de usuario</label>
                            <select class="form-control" name="" id="">
                                <option value="">Administrador</option>
                                <option value="">Tecnico</option>
                                <option value="" selected>Usuario</option>
                                
                            </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Solo Administradores puede realizar un registro nuevo</label> <br>
                                <button class="btn btn-success">registrar</button>
                            </div>
                        </div>
                    </form>
                   
                        <div class="col-md-12">
                            <h2>Lista de usuarios</h2>
                            <form action="form-inline">
                                <div class="form-group col-md-6" >
                                    <input class="form-control " type="text" name="" id="" placeholder="Buscar por nombre o correo">
                                    
                                </div>
                                <div class="form-group col-md-3">
                                    <button class="btn btn-success" >Buscar</button>
                                </div>
                            </form>
                        
                        <div class="table-reponsive">
                            <table class="table table-hover table table-bordered">
                                <tr class="active">
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Tipo de US</th>
                                    <th>Opciones</th>
                                </tr>
                                <tr>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>
                                        <button class="btn btn-success">Editar</button>
                                        <button class="btn btn-success">Eliminar</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>
                                        <button class="btn btn-success">Editar</button>
                                        <button class="btn btn-success">Eliminar</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>
                                        <button class="btn btn-success">Editar</button>
                                        <button class="btn btn-success">Eliminar</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>xxxxxx</th>
                                    <th>
                                        <button class="btn btn-success">Editar</button>
                                        <button class="btn btn-success">Eliminar</button>
                                    </th>
                                </tr>
                            </table>
                        </div>
                        
                            <div class="container-fluid">
                                <nav>
                                    <ul class="pager">
                                        <li class="previous"><a href="">&larr; Anterior</a></li>
                                        <li><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                        <li class="next"><a href="">Siguiente &rarr;</a></li>
                                    </ul>
                                </nav>
                            </div>
                       
                    </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                
              
                    <p>Sistema de Atencion Ciudadana de Alumbrado Publico <br>
                        Diseñado y Operado por Area de Desarrollo y Control de Sistemas de la Informacion</p>
                
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>