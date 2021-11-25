<?php
include("conexion.php");
$resultado=2;
if(isset($_POST['register'])){
	$idtipos=($_POST['idtipos']);
	$documentouser=($_POST['documentouser']);
	$nameuser=($_POST['nameuser']);
	$apeuser=($_POST['apeuser']);
	$email=($_POST['email']);
	$tel=($_POST['tel']);
	$pass=md5($_POST['pass']);
	$direc=($_POST['direc']);
	$idmuni=($_POST['idmuni']);
	$nomcomuna=($_GET['nomcomuna']);

	  $consulta="INSERT INTO usuarios(id_tipos,documento_usuarios,nombres_usuarios,apellidos_usuario,correo_usuario,telefono,pass_usuarios,direccion,id_municipios,id_rol,nom_comuna) 
	  values('$idtipos','$documentouser','$nameuser','$apeuser','$email','$tel','$pass','$direc','$idmuni','1','$nomcomuna')";
	  $resultado=mysqli_query($conn,$consulta);
      session_start();
	  if($resultado==1){
	  	$_SESSION['user']=$nameuser;
	  	header("location:../vista/iniciocliente.php?res=insertado");
	  }else{
	  	if($resultado<1){	  		
	  	header("location:../vista/registroclientes.php?res=error");
	  	}
	  }

}

mysqli_close($conn);
?>