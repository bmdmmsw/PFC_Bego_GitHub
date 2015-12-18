<?php
	include "funciones.php";
	session_start();
	
	$user = $_SESSION['user'];
	$telf=$_POST["telf"];
	$nuevaPass=$_POST["password"];
	$funcion=changePass();
	
?>

<html>
	<head>
		<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilosMario/master.css" media="screen" />
	
  </head>
	<body>
		<p>Cambiar Contraseña</p>
		<form action="cambiarPass.php" method="post">
			<table border="1">
				<caption>Cambiar Password</caption>
				<tbody>
					<tr>
						<td><label>Introduzca su número de teléfono</label></td>
						<td><input type="text" id="telf"></td>
					</tr>
					<tr>
						<td><label>Introduzca la nueva password</label></td>
						<td><input type="pass" id="password"></td>
					</tr>
				</tbody>
			</table> 
		</form>
		</br>
		<div id="footer">
			<a href="index.php">Inicio</a>
		</div>
	</body>
</html>