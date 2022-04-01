<!DOCTYPE html>
<html>
<head>
	
	<title>Acceder</title>
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form method="POST" action="<?php echo base_url(); ?>/Home/Loging">
			<label for="correo">Correo</label>
			<input  type="correo" id="correo" name="correo" placeholder="Correo"></input>
			<label for="contrasena">Contraseña</label>
			<input  type="contrasena" id="contrasena" name="contrasena" placeholder="contrasena"></input>
			<button type="submit">Iniciar Sesion</button>

			
		</form>


	</div>

</body>
<footer>
	<div class="text-center text-dar p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		<i class="bi bi-badge-cc"></i>2022:
		<a class="text-dark" href="#">Luis</a>
	</div>
	</footer>
</html>