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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
  <?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>
  <style>
    .sidebar-heading {
      color: rgb(255, 40, 2);
    }
  </style>
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include("sidebar.php") ?>
    <!-- /#sidebar-wrapper -->

    <style>
      .toggle-1 {
        height: 2em;
      }
    </style>
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark border-bottom">
        <button class="btn btn-dark " id="menu-toggle"><img class="toggle-1" src="../img/toggle.png" alt=""
            srcset=""></button>
        <button class="navbar-toggler btn btn-dark" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <img class="toggle-1" src="../img/toggle.png" alt="" srcset="">
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

      <div class="row p-5 justify-content-center align-items-center" style="height: 89vh;">
        <div class="card shadow px-4 py-5" style="width: 100%;">
          <p class="display-4 text-center">
              <strong>
                Bienvenido al sistema de administración de A Group Projects
              </strong>
          </p>
          <div class="row justify-content-center align-items-center py-4" style="width: 100%;">
          <!-- 
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
            </svg>
          -->
          <img width="150" height="150" src="../img/favicon.png">
        </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function (e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });

  </script>

</body>

</html>