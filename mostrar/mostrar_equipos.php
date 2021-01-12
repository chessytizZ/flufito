<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>A Group Projects</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="css/administracion.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>
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
      <style> #cerrar-sesion{
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
    <table class="table table-striped table-striped" id="ajustes">
        <thead>
          <tr>
            <th scope="col"  >N° de Certificado</th>
            <th scope="col" >Instrumento</th>
            <th scope="col" >Modelo</th>
            <th scope="col" >Fecha de Expedición</th>
            <th scope="col" >Fecha de Vencimiento</th>
            <th scope="col"  id="opcion">Opciones</th>
          </tr>
        </thead>
        <tbody>
        <?php
           include("conexion.php");

           $query="SELECT * FROM equipos";
           $resultado=$conexion->query($query);
           while($row=$resultado->fetch_assoc()){
             
           
           ?>
           <tr>
             <td><?php echo $row['num_cert']; ?></td>
             <td><?php echo $row['instrumento']; ?></td>
             <td><?php echo $row['modelo']; ?></td>
             <td><?php echo $row['fech_exp']; ?></td>
             <td><?php echo $row['fech_ven']; ?></td>
        
           
           
           </td>
             <td><a class='btn editar' id="opciones" href="editar_equipos.php?id=<?php echo $row['id']; ?>"> Editar</a></td>
             <td><a class='btn  eliminar' id="opciones" href="eliminar_equipos.php?id=<?php echo $row['id']; ?>"> Eliminar</a></td>
           </tr>
        <?php
        }
        ?>
        </tbody>
      </table>
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
