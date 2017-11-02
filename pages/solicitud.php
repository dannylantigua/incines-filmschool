<!DOCTYPE html>
<html xml:lang="es" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<script type="text/javascript" src="../lib/touchswipe.min.js"></script>
	<title>Solicitud de Taller</title>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="row" id="formulario">
			<form action="#">
				<h3>Solicitud de Taller</h3>
				<br>
				<div class="input-field col s12 m6">
					<input id="first-name" type="text" class="validate">
					<label for="first-name">Nombres</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="last-name" type="text" class="validate">
					<label for="last-name">Apellidos</label>
				</div>
				<div class="input-field col s12 offset-m6 m6">
					<input id="id-person" type="text" class="validate">
					<label for="id-person">Identificación</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="phone" type="text" class="validate">
					<label for="phone">Teléfono / Celular</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="email" type="text" class="validate">
					<label for="email">Correo Electrónico</label>
				</div>
				<div class="input-field col s12 m6 offset-m6">
					<input id="date" type="date" class="datepicker">
					<label for="date">Fecha de Nacimiento</label>
				</div>

				<br>
				<h5>Educación</h5>
				<div class="input-field col s12 m6">
					<select id="educacion">
				      <option value="" disabled selected>Elija una opción</option>
				      <option value="1">Secundaria [Bachiller]</option>
				      <option value="2">Universitario</option>
				      <option value="3">Otros</option>
				    </select>
					<label for="educacion">Nivel de Educación</label>
				</div>
				<div class="input-field col s12 m6">
					<input id="last-name" type="text" class="validate">
					<label for="last-name">Carrera (Técnica o Universitaria)</label>
				</div>
				<div class="input-field col s12 m6 offset-m6">
					<select id="taller1">
				      <option value="" disabled selected>Elija una opción</option>
				      <option value="1">Cinematografía</option>
				      <option value="2">Actuación</option>
				      <option value="3">Guión Cinematográfico</option>
				      <option value="3">Dirección</option>
				      <option value="3">Producción de Cine</option>
				      <option value="3">Iluminación</option>
				      <option value="3">Edición</option>
				    </select>
					<label for="taller1">Taller que solicita</label>
				</div>
				<div class="input-field col s12 m6">
					<select id="horario">
				      <option value="" disabled selected>Elija una opción</option>
				      <option value="1">Mañana</option>
				      <option value="2">Tarde</option>
				    </select>
					<label for="horario">Horario Disponible</label>
				</div>
				<div id="pepe" class="input-field col s12 m6">
					Días disponibles para tomar el curso: <br>
						<p><input type="checkbox" class="filled-in" id="semanal"/>
						<label for="semanal">Durante la semana</label>
						<p><input type="checkbox" class="filled-in" id="finsemana"/>
						<label for="finsemana">Fines de semana</label>
				</div>
				<br><br>
				<h5>Conteste las siguientes preguntas</h5>
				<div class="input-field col s12">
            		<textarea id="question1" class="materialize-textarea" length="160"></textarea>
            		<label for="question1">De que manera se ha interesado en Cine?</label>
          		</div>
          		<div class="input-field col s12">
            		<textarea id="question2" class="materialize-textarea" length="160"></textarea>
            		<label for="question2">Por qué quiere estudiar Cine? Que resultados espera obtener con este tipo de eduación?</label>
          		</div>
          		<div class="input-field col s12">
            		<textarea id="question3" class="materialize-textarea" length="160"></textarea>
            		<label for="question3">Qué pasos ya ha tomado para educarse en la materia de Cine? (Esto incluye leer libros, tomar talleres / clases, trabajar en proyectos filmicos en otras instituciones o comercialmente, etc)</label>
          		</div>
          		<div class="input-field col s12 m6">
            		<button class="btn waves-effect waves-light" type="submit" name="action">Enviar Solicitud
    					<i class="mdi-content-send right"></i>
  					</button>
          		</div>
			</form>	
			</div>
		</div>
	</div>
</div>



<?php include 'footer.php'; ?>

<!-- Script -->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
	<script src="../lib/init.js"></script>
</body>
</html>