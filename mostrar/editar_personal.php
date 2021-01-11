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
  <link rel="stylesheet" href="css/administracion.css">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>
<?php
        $id=$_REQUEST['id'];
          include("conexion.php");

          $query="SELECT * FROM personal WHERE id = '$id'";
          $resultado= $conexion->query($query);
          $row=$resultado->fetch_assoc();
            
          
          ?>
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
    <form class="form" enctype="multipart/form-data" action="editar_proceso_personal.php?id=<?php echo $row['id']; ?>" method="POST">
        <h2>EDITAR</h2>
        <p type="N° de Certificado"><input class="input" value="<?php echo $row['num_cert']; ?>" type="text"  placeholder="Introduzca número de certificado" name="num_cert" required></input></p>
        <p type="Cédula"><input class="input" type="number" value="<?php echo $row['num_ced']; ?>" placeholder="Introduzca número de cédula" name="num_ced" required></input></p>
        <p type="Nombre Completo"><input class="input" value="<?php echo $row['nom_comp']; ?>" type="text"  placeholder="Introduzca nombre completo" name="nom_comp" required></input></p>
        <label for="estado" >Estado</label>
        <select name="estado" value="<?php echo $row['estado']; ?>" required id="estado">
        <option value="0" <?php if ($row['estado'] == 0) { ?>
                                    selected="selected"
                            <?php } ?> 
        >Aprobado</option>
        <option <?php if ($row['estado'] == 1) { ?>
                     selected="selected"
         <?php } ?> value="1">Reprobado</option>
        <option <?php if ($row['estado'] == 2) { ?>
                     selected="selected"
         <?php } ?>  value="2">Cursando</option>
        </select>
        <p type="Fecha de Expedición"><input value="<?php echo $row['fech_exp']; ?>" class="input" type="date" name="fech_exp"></input></p>
        <p type="Fecha de Vencimiento"><input value="<?php echo $row['fech_ven']; ?>" class="input" type="date" name="fech_ven"></input></p>
        <label for="metodo">Metodo</label>
        <select id="metodo" value="<?php echo $row['metodo']; ?>" name="metodo" required>
         <option <?php if ($row['metodo'] == 0) { ?>
                     selected="selected"
         <?php } ?>  value="0">Nivel 1</option>
        <option <?php if ($row['metodo'] == 1) { ?>
                     selected="selected"
         <?php } ?> value="1">Nivel 2</option>
        
        </select>


        <input class="a" name="subir" type="submit" value="EDITAR"></input>
      </form>
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
