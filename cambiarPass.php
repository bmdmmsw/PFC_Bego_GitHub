<?php
	include"funciones.php";
	session_start();
	$conn=connect();
	
	$email=$_SESSION["user"];
	$telf=$_POST["telf"];
	$nuevaPass=$_POST["password"];
	
	
	$sql = "SELECT * FROM usuario WHERE Email='{$email}' AND Telefono='{$telf}'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1){
		//Hacer la query
		$sql="UPDATE usuario SET Pass='{$nuevaPass}' WHERE Email='{$email}'";
		$result = $conn->query($sql);
		$conn->close();
		echo "No se que pasa.";
	}else{
		$conn->close();
		echo "No se pudo realizar la accion.";
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="estilos/master.css" media="screen" />
		<script>
		function solve() {
			var respuesta = document.getElementById('telf').value;
			
			if(respuesta== temp()){
				$("#resultado").html("<p>¡Correcto! Siguiente.</p>");				
				
			} else {
				$("#resultado").html("<p>No, existe ese telefono.</p>");								
			}
		}
		funcion temp(){
			$sql = "SELECT * FROM usuario WHERE Email='{$email}' AND Telefono='{$telf}'";
			$result = $conn->query($sql);
			if ($result->num_rows == 1){
				//Hacer la query
				$sql="UPDATE usuario SET Pass='{$nuevaPass}' WHERE Email='{$email}'";
				$result = $conn->query($sql);
				$conn->close();
				echo "No se que pasa.";
			} else{
				$conn->close();
				echo "No se pudo realizar la accion.";
			}
		}
		</script>
	</head>	
	<body>
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
			<button id="solve" name="solve" onClick="solve()">Contestar</button>
		</form>
		</br>
		<div id="footer">
			<a href="index.php">Inicio</a>
		</div>
	</body>
</html>