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
    <form class="form" enctype="multipart/form-data" action="editar_proceso_equipo.php?id=<?php echo $row['id']; ?>" method="POST">
        <h2>EDITAR</h2>
        <p type="Código de Serial"><input class="input" value="<?php echo $row['nombre_equipo']; ?>" type="text"  placeholder="Introduzca Código Serial" name="nombre_equipo" required></input></p>
        <p type="Modelo"><input class="input" type="text" value="<?php echo $row['nombre_empresa']; ?>" placeholder="Introduzca Modelo del Equipo" name="nombre_empresa" required></input></p>
     

        <input class="a" name="subir" type="submit" value="EDITAR"></input>
      </form>
    
    
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



