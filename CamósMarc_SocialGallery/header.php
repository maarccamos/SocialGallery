<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div style="text-align: left;">
		<?php
		//Mantengo la sesión. Por ende puedo utilizar la variable $_SESSION anteriormente configurada
		session_start();
		if(isset($_SESSION['name'])){
			echo "<a href='./services/logout.proc.php'>Cerrar sesión</a>&nbsp;&nbsp;";
		}else{
			header("Location: ./index.php");
		}
		?>
	</div> 
</body>
</html>