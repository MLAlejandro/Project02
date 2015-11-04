<?php
include('session.php');
?>
<html>
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <meta name="description" content="Proyecto 2">
                <meta name="keywords" content="HTML5, CSS3, JavaScript">
                <title>Proyecto 2</title>       
        <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
                <div class="fondo">
        	<header>
        		<p class="username"><?php echo $login_session; ?></p>
                        </br>
                        <p class="username"><a href="index.php">Cerrar sesión</a></p>
        		<h1>TITULO</H1>
        		
        	</header>
        	<nav>
        		<h1>FORMULARIO</h1>
        	</nav>
        	<section>
        		<form class="formulario" action="busqueda.php">
        			<label for="autor">
        				Aula:
        			</label>
        			 <select class="formul"  type="text" name="aula">
                                <?php
                                    $con = mysqli_connect('localhost', 'root', '', 'bd_botiga_reserva');   
                                    $sql = "SELECT tipus_recurs, nom_recurs FROM tbl_recurs where tbl_recurs.tipus_recurs= '1'";
                                    $query = mysqli_query($con,$sql);
                                    if(mysqli_num_rows($query)>0){
                                        while($recurs=mysqli_fetch_array($query)){
                                            $valor2 = utf8_encode($recurs['nom_recurs']);
                                            echo "<option value='$valor2'>". $valor2 ."</option>";
                                        }
                                    }
                                ?>   
                    </select>
        			<br>
        				<label for="recursos">
        					Recursos:
        				</label><br>
					     <select class="formul"  type="text" name="recuros">
                                <?php
                                    $con2 = mysqli_connect('localhost', 'root', '', 'bd_botiga_reserva');   
                                    $sql2 = "SELECT tipus_recurs, nom_recurs FROM tbl_recurs where tbl_recurs.tipus_recurs= '0'";
                                    $query2 = mysqli_query($con2,$sql2);
                                    if(mysqli_num_rows($query2)>0){
                                        while($recurs2=mysqli_fetch_array($query2)){
                                            $valor3 = utf8_encode($recurs2['nom_recurs']);
                                            echo "<option value='$valor3'>". $valor3 ."</option>";
                                        }
                                    }
                                ?>   
                    </select>
					</section>
					<br>
					<button class="form2" type="submit" value="ENVIAR"/>ENVIAR</button>
				</form>
        		</div>
        	</section>
        <script src='js/main.js'></script>
        <script src="js/index.js"></script>
        </body>
</html>