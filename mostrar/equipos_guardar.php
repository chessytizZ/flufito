<?php

session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>
<?php

include("conexion.php");


            $num_cert=$_POST['num_cert'];
            $instrumento=$_POST['instrumento'];
            $modelo=$_POST['modelo'];
            $fech_exp=$_POST['fech_exp'];
            $fech_ven=$_POST['fech_ven'];


            $query="INSERT INTO equipos(num_cert, instrumento, modelo, fech_exp, fech_ven) VALUES('$num_cert', '$instrumento', '$modelo', '$fech_exp', '$fech_ven')";
            $resultado= $conexion->query($query);

            if ($resultado) {
                header("location:mostrar_equipos.php");
            }
            else{
                echo $conexion->error;
            }

?>