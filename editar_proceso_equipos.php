<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location:login.php");
}
?>

<?php
include("conexion.php");

if (isset($_POST["subir"])) {

    if (isset( $_FILES['archivo']['name'] ) && $_FILES['archivo']['name'] != "") {
        $nombre =  time().'-'.mt_rand() . '_' . $_FILES['archivo'] ['name'];
        $tipo = $_FILES['archivo'] ['type'];
        $tamanio = $_FILES['archivo']['size'];
        $ruta = $_FILES['archivo']['tmp_name'];
        $destino= "archivo/" . $nombre;   
        $copy =  copy($ruta,$destino);

        if ($copy) {
           unlink('archivo/'. $_POST['archivo_actual']);
        }
    }
    else{
        $copy=true;
        $nombre = $_POST['archivo_actual'];
    }

    
    if ($nombre != "") {
        if( $copy )  {
            $id=$_REQUEST['id'];
            $nom_comp=$_POST['nom_comp'];
            $num_ced=$_POST['num_ced'];
            $estado=$_POST['estado'];
            $fech_exp=$_POST['fech_exp'];
            $metodo=$_POST['metodo'];

            $query="UPDATE capacitacion SET nom_comp = '$nom_comp', num_ced = '$num_ced', estado='$estado', fech_exp= '$fech_exp', metodo='$metodo', tamanio='$tamanio', tipo='$tipo', nombre_archivo='$nombre' WHERE id='$id'";
            $resultado= $conexion->query($query);

            if ($resultado) {
                header("location:registros_capacitacion.php");
            }
            else{
                echo $conexion->error;
            }
        }else{
            echo "error";
        }
    } 
}



            ?>