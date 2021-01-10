<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>A Group Projects</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/administracion.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
<style>
  .sidebar-heading{
    color: rgb(255, 40, 2);
  }
</style>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">A Group Projects </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Inicio</a>
        <a href="mostrar.php" class="list-group-item list-group-item-action bg-light">Mostrar Listado</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Registrar</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Editar</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Eliminar</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Salir</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-light " id="menu-toggle"><img class="toggle-1" src="../img/toggle.png" alt="" srcset=""></button>
<style>
.toggle-1{
  height: 2em;
}

</style>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="panel.html">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Ir a la página</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
     

<style> 
#cerrar-sesion{
  margin-left: 660%;
  width: 130px;
  margin-top: 8px;
    height: 50px;
    font-weight: 600;
}
#tamaño{
margin-top: 8px;
}
.table{
  text-align: center;
margin-top: 8%;
}
 #ajustes{
        width: 95%;
    }
</style>
<form class="form" action="administracion_guardar.php" enctype="multipart/form-data" method="POST">
        <h2>REGISTRO DE HERRAMIENTAS</h2>
        <p type="N° de Certificado"><input class="input" type="text"  placeholder="Introduzca número de certificado" name="num_cert" required></input></p>
        <p type="Instrumento"><input class="input" type="text"  placeholder="Introduzca instrumento" name="instrumento" required></input></p>
        <p type="Modelo"><input class="input" type="text"  placeholder="Introduzca modelo" name="modelo" required></input></p>
        <p type="Fecha de Expedición"><input class="input" type="date" name="fech_exp"></input></p>
        <p type="Fecha de Vencimiento"><input class="input" type="date" name="fech_ven"></input></p>

        </select>

        <input class="a" type="submit" name="subir" value="REGISTRAR"></input>
      </form>
<br>

    
    </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>




