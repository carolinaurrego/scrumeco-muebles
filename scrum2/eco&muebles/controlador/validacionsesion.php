<?php
include ("../modelo/con_dbsesion.php");
session_start();
/*asiganr variables de fomrulario*/
$correo=($_REQUEST['introducir_email']);
$clave=md5($_REQUEST['introducir_clave']);
//consulta
$sql="SELECT * FROM usuarios WHERE correo_usuario='$correo' AND pass_usuarios='$clave'";
$consulta=mysqli_query($conn,$sql);

$lista=mysqli_fetch_array($consulta);
    if ($lista['id_rol']=="1") {
        $_SESSION['user']=$nombre;
        header("location:../vista/iniciocliente.php");
        //die("Registro Encontrado");
    }elseif($lista['id_rol']=="2") {
        $_SESSION['user']=$nombre;
        header("location:../vista/administrador.php");
        //die("Registro Encontrado");
    }else {
        die("Usuario y/o contraseña no registrada... Verificar");
    }
    mysqli_free_result($consulta);
    mysqli_close($conn);
?>

 
