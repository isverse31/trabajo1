<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Solicitud Empleo</title>
	<!-- Incluir bulma.min.css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
</head>
<body>
<style>
body {
    background-color: #93B874;
}
</style>
	<section class="hero is-primary">
  		<div class="hero-body">
    		<p class="title">
      			Datos de persona
    		</p>
  		</div>
	</section>

	<section >

  		<div class="column"></div>

  		<div class="column is-two-fifths">
			
		  <figure class="image is-128x128">
  <img  src="trabajo2.png">
</figure>
  			<?php
	
				$nombre = $_POST['nombre'];
                $Ap = $_POST['Ap'];
                $Am = $_POST['Am'];
                $cargo = $_POST['cargo'];
                $rfc = $_POST['rfc'];
                $curp = $_POST['curp'];
				$edad = $_POST['edad'];
                $domicilio = $_POST['domicilio'];
				$tel = $_POST['tel'];
                $email = $_POST['email'];
                $nacimiento = $_POST['nacimiento'];
                $esc = $_POST['esc'];
                $sexo = $_POST['sexo'];
                $civil = $_POST['civil'];
                $obs = $_POST['obs'];

				echo "<h1 class='is-subtitle'>";
				echo "Hola " . $nombre . " ha sido enviada su solicitud. ";
                echo "Ahora necesitamos que verifique sus datos: ";
				echo "<br><br>Nombre del solicitante: " . $nombre . $Ap . $Am . ".";
                echo "<br>Cargo actual: " . $cargo . ".";
                echo "<br>RFC: " . $rfc .".";
                echo "<br>CURP: " . $curp . ".";
                echo "<br>Domicilio: " . $domicilio . ".";
                echo "<br>Teléfono: " . $tel . ".";
                echo "<br>Correo Electronico: " . $email . ".";
                echo "<br>Sexo: ". $sexo . ".";
                echo "<br>Fecha de Nacimiento: " . $nacimiento . ".";
                echo "<br>Estado Civil: " . $civil . ".";
                echo "<br>Escolaridad: " . $esc . ".";
				echo "</h1>";
			?>


		</div>

		<div class="column"></div>

	</section>
	

</body>
</html>