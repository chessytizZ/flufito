<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>
<?php
include("conexion.php");

$id=$_REQUEST['id'];
$archivo = $_REQUEST['archivo'];
unlink('archivo/'. $archivo);

 $query="DELETE FROM homologaciones WHERE id='$id'";
 $resultado= $conexion->query($query);

if ($resultado) {
    header("location:registros_homologaciones.php");
}
else{
    echo $conexion->error;
}

?>