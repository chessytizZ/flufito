<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}

include("conexion.php");

if (isset($_POST["subir"])) {

   
            $id=$_REQUEST['id'];
            $num_cert=$_POST['num_cert'];
            $nom_comp=$_POST['nom_comp'];
            $num_ced=$_POST['num_ced'];
            $estado=$_POST['estado'];
            $fech_exp=$_POST['fech_exp'];
            $fech_ven=$_POST['fech_ven'];
            $metodo=$_POST['metodo'];

            $query="UPDATE personal SET num_cert = '$num_cert', nom_comp = '$nom_comp', num_ced = '$num_ced', estado='$estado', fech_exp= '$fech_exp', fech_ven= '$fech_ven', metodo='$metodo' WHERE id='$id'";
            $resultado= $conexion->query($query);

            if ($resultado) {
                header("location:mostrar_personal.php");
            }
            else{
                echo $conexion->error;
            }  

        }
            ?>