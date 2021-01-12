
<?php

$user=$_POST['user'];
$password=$_POST['password'];



if ($user=="2021" && $password=="2021") {
    session_start();
    $_SESSION["login"] = true;
    header("location:panel.php");
}
else{
    header("location:login.php?error=1");
}



?>