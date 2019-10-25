<!DOCTYPE html>
<html>
<head>
	<title>Mi sitio</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="codigo.js"></script>
</head>
<body style="background-image: url('fotos/fondo.jpg');">
	<div style="text-align: right;">
	<?php
	include "./header.php";
	?>	
	</div>
	<h1 style=" font-size: 20px; font-family: verdana; color: white;">Bienvenido <?php echo $_SESSION['name']; ?></h1>


	<h1 align="center" style="color: white; font-family: verdana; font-size: 300%;">GALERIA DE CIUDADES</h1>
	<!-- Formulario -->
	
	<div style="text-align: center;">
		<h1 style="color: white;">Subir nueva ciudad</h1>
		<p id="mensaje" class="mensaje"></p>
	<form method="post" enctype="multipart/form-data" action="./services/processa.php" onsubmit="return misitio()">
		<input type="text" name="titulo" id="titulo" placeholder="Titulo..." >
		<br>
		<input type="file" name="imagen" id="imagen" accept="image/png, image/jpg, image/jpeg, image/gif" placeholder="Imagen" style="margin-left: 133px;" >
		<br>
		<input type="date" name="fecha" id="fecha" placeholder="Fecha" >
		<br>
		<input type="submit" name="Enviar">


	</form>
</div>
	<br>
<?php
//Conexión a la base de datos
include "./services/connection.php";
//Seleccion y muestra de datos de la base de datos (bomitar la base de datos)
$id_user=$_SESSION['id'];
$sq="SELECT tbl_gallery.name, tbl_gallery.ruta, tbl_gallery.date FROM tbl_gallery WHERE id_usuario='$id_user'";
$result = mysqli_query($conn, $sq);
 //WHERE tbl_gallery.id_usuario='"$_SESSION['id']."'

if(!empty($result) && mysqli_num_rows($result)>0){
	//Pintame el resultado(row = fila)
	while ($row = mysqli_fetch_array($result)) {
		echo "<div>";
		//Añadimos la imagen a la pagina web con la etiqueta img de HTML
		echo '<div style="background-color: white; margin-right:0.001%; margin-left: 7%; margin-bottom:70px; height: 320px; width: 40%; display: inline-flex; float: left;">'.'<img src="'.$row['ruta'].'"width=300px height=300px style="margin-left: 10px; margin-top: 10px; float: left;"/>';
		//Añadimos el nombre a la pagina web con la etiqueta h2 de HTML
		echo "<ul style='letter-spacing: 1px;margin-top: 15px; margin-left:5%; font-size: 20px;'> <br><br>
				<li>Nombre: </b><br>".utf8_encode($row['name'])."</li>
				<li>Fecha: </b><br>".utf8_encode($row['date'])."</li>
				</ul><br><br><br><br><br><br><br><br></div>";
		
	}
}else{
	echo "0 resultados";
}



?>
</body>
</html>