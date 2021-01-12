<style>
  .show {
    display: block !important;
  }


  .sub-list a {
    padding-left: 2rem;
    color: rgb(236, 236, 236) !important;
    background-color: rgb(97, 97, 97) !important;
    display: none;
  }

  .bg-dark {
    color: rgb(236, 236, 236) !important;
  }
</style>
<div class="bg-dark border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">A Group Projects </div>
  <div class="list-group list-group-flush">
    <a href="panel.php" class="list-group-item list-group-item-action bg-dark">Inicio</a>
    <div class="list-group list-group-flush sub-list">
      <button class="list-group-item list-group-item-action bg-dark btn shadow-none">Mostrar Listado</button>
      <a href="mostrar_equipos.php" class="list-group-item list-group-item-action bg-dark">Equipos</a>
      <a href="mostrar_personal.php" class="list-group-item list-group-item-action bg-dark">Personal</a>
      <a href="mostrar_herramientas.php" class="list-group-item list-group-item-action bg-dark">Herramientas</a>
    </div>
    <div class="list-group list-group-flush sub-list">
      <button class="list-group-item list-group-item-action bg-dark btn shadow-none">Registrar</button>
      <a href="registrar_equipos.php" class="list-group-item list-group-item-action bg-dark">Equipos</a>
      <a href="registrar_personal.php" class="list-group-item list-group-item-action bg-dark">Personal</a>
      <a href="registrar_herramientas.php" class="list-group-item list-group-item-action bg-dark">Herramientas</a>

    </div>

    <a href="sing_out.php" class="list-group-item list-group-item-action bg-dark">Salir</a>
  </div>
</div>
<script>
  $('button.list-group-item').on('click', function (e) {
    $(this).parent().find("a").toggleClass("show");
    e.preventDefault();
  });
</script>