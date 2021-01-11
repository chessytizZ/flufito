<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>
<?php


include("conexion.php");



            $num_cert=$_POST['num_cert'];
            $num_ced=$_POST['num_ced'];
            $nom_comp=$_POST['nom_comp'];
            $estado=$_POST['estado'];
            $fech_exp=$_POST['fech_exp'];
            $fech_ven=$_POST['fech_ven'];
            $metodo=$_POST['metodo'];

            $query="INSERT INTO personal(num_cert, num_ced, nom_comp , estado, fech_exp, fech_ven, metodo) VALUES('$num_cert', '$num_ced', '$nom_comp' , '$estado', '$fech_exp', '$fech_ven', '$metodo')";
            $resultado= $conexion->query($query);

            if ($resultado) {
                header("location:mostrar_personal.php");
            }
            else{
                echo $conexion->error;
            }

?>