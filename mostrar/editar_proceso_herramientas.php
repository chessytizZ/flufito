<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>

<?php
include("conexion.php");

if (isset($_POST["subir"])) {

    
            $id=$_REQUEST['id'];
            $num_cert=$_POST['num_cert'];
            $instrumento=$_POST['instrumento'];
            $modelo=$_POST['modelo'];
            $fech_exp=$_POST['fech_exp'];
            $fech_ven=$_POST['fech_ven'];

            $query="UPDATE herramientas SET num_cert = '$num_cert', instrumento = '$instrumento', modelo='$modelo', fech_exp= '$fech_exp', fech_ven= '$fech_ven' WHERE id='$id'";
            $resultado= $conexion->query($query);

            if ($resultado) {
                header("location:mostrar_herramientas.php");
            }
            else{
                echo $conexion->error;
            }
        }else{
            echo "error";
        }




            ?>