<style>
    .show {
      display: block!important;
    }

    .sub-list a {
      padding-left: 2rem;
      background-color: rgb(236, 236, 236) !important;
      display: none;
    }
  </style>
  <div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading">A Group Projects </div>
    <div class="list-group list-group-flush">
      <div class="list-group list-group-flush sub-list">
        <button class="list-group-item list-group-item-action bg-light btn shadow-none">Inicio</button>
        <a href="mostrar.php" class="list-group-item list-group-item-action bg-light">submenú 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">submenú 2</a>
      </div>
      <div class="list-group list-group-flush sub-list">
        <button class="list-group-item list-group-item-action bg-light btn shadow-none">Mostrar Listado</button>
        <a href="mostrar.php" class="list-group-item list-group-item-action bg-light">submenú 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">submenú 2</a>
      </div>
      <div class="list-group list-group-flush sub-list">
        <button class="list-group-item list-group-item-action bg-light btn shadow-none">Registrar</button>
        <a href="mostrar.php" class="list-group-item list-group-item-action bg-light">submenú 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">submenú 2</a>
      </div>
      <div class="list-group list-group-flush sub-list">
        <button class="list-group-item list-group-item-action bg-light btn shadow-none">Editar</button>
        <a href="mostrar.php" class="list-group-item list-group-item-action bg-light">submenú 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">submenú 2</a>
      </div>
      <div class="list-group list-group-flush sub-list">
        <button class="list-group-item list-group-item-action bg-light btn shadow-none">Eliminar</button>
        <a href="mostrar.php" class="list-group-item list-group-item-action bg-light">submenú 1</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">submenú 2</a>
      </div>
      <a href="#" class="list-group-item list-group-item-action bg-light">Salir</a>
    </div>
  </div>
  <script>
    $('button.list-group-item').on('click', function (e) {
      $(this).parent().find("a").toggleClass("show");
      e.preventDefault();
    });
  </script>