<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>
<?php
include("conexion.php");
$id=$_REQUEST['id'];

 $query="DELETE FROM herramientas WHERE id='$id'";
 $resultado= $conexion->query($query);

if ($resultado) {
    header("location:mostrar_herramientas.php");
}
else{
    echo $conexion->error;
}

?>