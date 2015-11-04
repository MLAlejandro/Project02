<!DOCTYPE html>
<!--Conexion con la BD botiga animals-->
<?php
$con = mysqli_connect('localhost', 'root', '', 'BD_botiga_reserva');
$sql = "SELECT * FROM tbl_recurs";
$query = mysqli_query($con,$sql);

?>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ejemplo de formularios</title>
		
	</head>
	<body>
<?php
	$comprovado=0;
	$sql = "SELECT tbl_recurs.nom_recurs, tbl_recurs.desc_recurs, tbl_recurs.img_recurs, tbl_recurs.id_recurs FROM tbl_recurs ";
			
	if(isset($_REQUEST['aula'])) {
		$aulas = $_REQUEST['aula'];
		$sql.= "WHERE tbl_recurs.nom_recurs='$aulas' ";
		$comprovado=1;
	}
	if ($_REQUEST['aula']=0) {
		$sql.="";
	}


	if($comprovado==1){
		if(isset($_REQUEST['recursos'])) {

			$recurso = $_REQUEST['recursos'];
			$sql.= "AND tbl_recurs.nom_recurs='$recurso' ";
		}
	else{
		if(isset($_REQUEST['recursos'])) {
			$recurso = $_REQUEST['recursos'];
			$sql.= "WHERE tbl_recurs.nom_recurs='$recurso' ";
		}
		if ($_REQUEST['recursos']=0) {
			$sql.="";
		}
	}
		}	
	
	//mostrar todos los datos con un while
	echo "$sql<br/>";
	$datos = mysqli_query($con, $sql);
			$filas= mysqli_num_rows($datos);
			
			if($filas!=0){
				 while($prod = mysqli_fetch_array($datos)){
				 	//echo "<div class='formulario'>";
				 	echo "<h1>Has reservado:</h1>";
					echo "<br/><b>Nombre de la aula:</b> $prod[nom_recurs]<br/>";
					echo "<br/><b>Descripción:</b> $prod[desc_recurs]<br/><br/>";
						
					//mostrar imagen correspondiente anidada al id del anuncio
					$fichero="img/$prod[img_recurs]";
					if(file_exists($fichero)){
						echo "<img src='$fichero'><br/><br/><br/>";
					} else {
						echo "<img src='img/no_disponible.jpg'><br/><br/><br/>";
					}
					//echo "</div>";
				}
			}else{
				echo "<h1>No hay resultados</h1>";
				}

			//cerramos la conexión con la base de datos
			mysqli_close($con);
?>
</body>
</html>