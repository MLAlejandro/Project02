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
        		<p class="username">username</p>
        		<h1>TITULO</H1>
        		
        	</header>
        	<nav>
        		<h1>FORMULARIO</h1>
        	</nav>
        	<section>
        		<form class="formulario">
        			<label for="autor">
        				Aula:
        			</label>
        			<select multiple class="formul" size="10" type="text" name="aula">
                                <?php
                                    $con = mysqli_connect('localhost', 'root', 'DAW22015', 'bd_botiga_reserva');   
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
        			<br/>
        				<label for="recursos">
        					Recursos:
        				</label><br>
					    <input type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex1" for="recurso1">Recurso 1</label>
					    <input class="check2" type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex2" for="recurso1">Recurso 2</label>
					    <input class="check3" type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex3" for="recurso1">Recurso 3</label><br>
					    <input type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex1" for="recurso1">Recurso 4</label>
					    <input class="check2" type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex2" for="recurso1">Recurso 5</label>
					    <input class="check3" type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex3" for="recurso1">Recurso 6</label><BR>
					    <input type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex1" for="recurso1">Recurso 7</label>
					    <input class="check2" type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex2" for="recurso1">Recurso 8</label>
					    <input class="check3" type="checkbox" value="None" id="recurso1" name="Recurso1"/>
					    <label class="tex3" for="recurso1">Recurso 9</label>
					</section>
					<br>
					<button class="form2" type="submit" value="ENVIAR"/>ENVIAR</button>
				</form>
        	</section>
       
        </body>
</html>