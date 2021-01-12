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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<style>
  .sidebar-heading{
    color: rgb(255, 40, 2);
  }
</style>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include("sidebar.php") ?>

    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
        <button class="btn btn-dark " id="menu-toggle"><img class="toggle-1" src="../img/toggle.png" alt="" srcset=""></button>
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
<br>
<br>
    <form class="form" action="personal_guardar.php" enctype="multipart/form-data" method="POST">
        <h2 id="titulo">REGISTRO PERSONAL</h2>
        <p type="N° de Certificado"><input class="input" type="text"  placeholder="Introduzca número de certificado" name="num_cert" ></input></p>
        <p type="Cédula"><input class="input" type="number"  placeholder="Introduzca número de cédula" name="num_ced" required></input></p>
        <p type="Nombre Completo"><input class="input" type="text"  placeholder="Introduzca nombre completo" name="nom_comp" required></input></p>
        <label for="estado" >Estado</label>
        <select required name="estado" required id="estado">
         <option value="0">Aprobado</option>
        <option value="1">Reprobado</option>
        <option value="2">Cursando</option>
        </select>
        <p type="Fecha de Expedición"><input class="input" type="date" name="fech_exp"></input></p>
        <p type="Fecha de Vencimiento"><input class="input" type="date" name="fech_ven"></input></p>
        <label  for="metodo">Metodo</label>
        <select id="metodo" name="metodo" >
         <option value="0">Nivel 1</option>
        <option value="1">Nivel 2</option>
        
        </select>
      
       

        <input class="a" type="submit" name="subir" value="REGISTRAR"></input>
        <br>
      </form>
<br>
<br>
<br>
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




