<!DOCTYPE html>
<html>
<head>
	
	<title>Buscar cuenta</title>
</head>
<div class="text-center text-dar p-3" style="background-color: rgb(250, 235, 215);
		font-family: sans-serif;
		text-align: center;

	">
<body>
	<div class="container">
		<h1>Buscador de cuenta para actualizar y/o borrarla</h1>
		<form method="POST" action="<?php echo base_url(); ?>/Home/ingresarForm">
			<label for="correo">Correo</label>
			<input  type="correo" id="correo" name="correo" placeholder="Correo"></input>
			<label for="contrasena">Contraseña</label>
			<input  type="contrasena" id="contrasena" name="contrasena" placeholder="contrasena"></input>
			<button type="submit">Buscar</button>

			
		</form>


	</div>

</body>
<footer>
	<div class="text-center text-dar p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		<i class="bi bi-badge-cc"></i>2022:
		<a class="text-dark" href="#">Luis</a>
	</div>
	</footer>
</div>
</html>