<?php
include "./connection.php";

$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];
$encript = md5($pass);


//Entra si está configurada la variable del formulario del login
if(isset($_REQUEST['user'])){

	$query = "SELECT * FROM tbl_usuarios WHERE nombre='$user' AND password='$encript'";

	$result = mysqli_query($conn,$query);
	
	//La variable $result debería de tener como mínimo un registro coincidente
	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_array($result);
		//Creo una nueva sesión y defino $_SESSION['nombre']
		session_start();
		$_SESSION['name']=$user;
		$_SESSION['id']=$row['id'];
		
		//Voy a mi sitio personal
		header("Location: ../misitio.php");

	}else{
		//Ha fallado la autenticación vuelvo a index.php
		header("Location: ../index.php");
		
	}
//Si no está configurada la variable del formulario del login vuelve al index.php
}else{
	header("Location: ../index.php");
	
}	
?>