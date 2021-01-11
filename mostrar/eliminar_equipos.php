<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>
<?php
include("conexion.php");
$id=$_REQUEST['id'];
 $query="DELETE FROM equipos WHERE id='$id'";
 $resultado= $conexion->query($query);

if ($resultado) {
    header("location:mostrar_equipos.php");
}
else{
    echo $conexion->error;
}

?>