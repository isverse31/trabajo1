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

	<section class="hero is-link">
  		<div class="hero-body">
    		<p class="title">
      			Solicitud Empleo
    		</p>
  		</div>
	</section>

    <style>
 
body {
    background-color: #93B874;
}
</style>
	<section class="section columns">

  		<div class="column">
  		<div class="columns is-desktop">
			<form action="solicitud.php" method="post">
				
                <div>
					<label><b>Nombre(s):</b></label>
					<input class="input is-primary" type="text" name="nombre" require>
                    
                </div >
                <div>
					<label><b>Apellido Paterno:</b></label>
					<input class="input is-primary" type="text" name="Ap" required>
                </div>
                <div>
					<label><b>Apellido Materno:</b></label>
					<input class="input is-primary" type="text" name="Am" required>
				</div>
                
                <div>
					<label><b>Cargo:</b></label>
					<input class="input is-primary" type="text" name="cargo" required>
				</div>

                <div>
					<label><b>RFC:</b></label>
					<input class="input is-primary" type="text" name="rfc">
				</div>

                <div>
					<label><b>Curp:</b></label>
					<input class="input is-primary" type="text" name="curp" >
				</div>

				<div>
					<label><b>Edad:</b></label>
					<input class="input is-primary" type="number" name="edad" min="0" max="120">
				</div>

                <div>
					<label><b>Domicilio:</b></label>
					<input class="input is-primary" type="text" name="domicilio">
				</div>

				<div>
					<label><b>Teléfono:</b></label>
					<input class="input is-primary" type="tel" name="tel" >
				</div>

                <div>
					<label><b>Correo Electronico:</b></label>
					<input class="input is-primary" type="email" name="email">
				</div>
                <br>

                <div>
					<label><b>Fecha de Nacimiento:</b></label>
					<input class="input is-primary" type="date" name="nacimiento" required>
				</div>
                <br>
                <div class="select is-rounded">
                    <select>
                    <option><b>Escolaridad</b></option>
                    <option>Primaria</option>
                    <option>secundaria</option>
                    <option>Preparatoria</option>
                    <option>Profesional</option>
                    </select>
                    
                </div>
                <div>
                    <br>
                <label><b>Sexo:</b></label>
                <div class="control">
                <label class="radio">
                    <input type="radio" name="sexo">
                        M
                </label>
                <label class="radio">
                    <input type="radio" name="sexo">
                        H
                </label>
                </div>
                <br>
                <label><b>Estado Civil:</b></label>
                <div class="control">
                <label class="radio">
                    <input type="radio" name="civil">
                        Soltero
                </label>
                <label class="radio">
                    <input type="radio" name="civil">
                        Casado
                </label>
                </div>
				<br>
                <div>
                <fieldset style="width:70%" >
                <label><b>Observaciones</b></label>
                <textarea class="textarea is-primary" placeholder="50 palabras" name="obs"></textarea>
                </fieldset>
                <div>
					<input class="button is-primary" type="submit" value="Enviar">
				</div>
			</form>
		
        
		<div class="column"></div>

	</section>
    
</body>
</html>