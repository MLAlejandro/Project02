<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios</title>
	</head>
	<body>
<?php
	echo "Nombre de usuario: $_REQUEST[usuario]<br/>";
	echo "Contraseña: $_REQUEST[clave]<br/>";

	print("Estudios: ");
	foreach ($_REQUEST['estudios'] as $nivel) {
		echo "$nivel ";	
	}
	echo "<br/>";

	
	if(!isset($_REQUEST['aficion'])){
		echo "No tienes aficiones";
	} else {
		print("Aficiones: ");
		foreach ($_REQUEST['aficion'] as $hobby) {
			echo "$hobby ";	
		}
		echo "<br/>";
	}

	
?>
</body>
</html>