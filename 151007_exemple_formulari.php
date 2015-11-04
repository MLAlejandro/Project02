<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios</title>
	</head>
	<body>
<?php
	
	echo "Nombre de usuario: $_REQUEST[nombre_usuario]<br/>";
	echo "Contraseña: $_REQUEST[clave]";
	$ciudades = $_REQUEST["ciudad"];
	for ($cont=0;$cont<count($ciudades);$cont++){     
		echo " <br/> Ciudad " . $cont . ": " . $ciudades[$cont];    
	} 
	echo "<br/>";
	echo "Fecha: $_REQUEST[fecha]<br/>";
	echo "Email: $_REQUEST[email]<br/>";
	echo "Telefono: $_REQUEST[telefono]<br/>";
	echo "Vehiculos: $_REQUEST[vehiculos]<br/>";

	if(!isset($_REQUEST['aficion'])){
		echo "No tienes aficiones";
	} else {
		print("Aficiones: ");
		foreach ($_REQUEST['aficion'] as $hobby) {
			echo "$hobby ";	
		}
		echo "<br/>";
	}


	$radiobutton = $_REQUEST['sexo'];
	if ($radiobutton=="h"){
		echo "Sexo: Hombre";
	}else{
		echo "Sexo: Mujer";
	}
	echo "<br/>";
?>
<a href="151007_exemple_formulari.html">Volver</a>
</body>
</html>