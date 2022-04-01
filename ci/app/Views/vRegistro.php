<!DOCTYPE html>
<html>
<head>
	<div class="text-center text-dar p-3" style="background-color: rgb(250, 235, 215);
		font-family: sans-serif;
		text-align: center;

	">
	<title>Registro</title>
</head>
<body>
	<div class="container">
		<h1>Bienvenida al registro de usuarios para poder tener un inicio de sesion</h1>
		<h2>Registro para un usuario</h2>
		<form method="POST" action="../Home
		/insertarForm">
			<label for="nombre">Nombre</label>
			<input type="nombre" id="nombre" name="nombre" placeholder="Nombre">
			<br><br>
			<label for="apellidos">Apellidos</label>
			<input type="apellidos" id="apellidos" name="apellidos" placeholder="Apellidos">
			<br><br>
			<label for="edad">Edad</label>
			<input type="edad" id="edad" name="edad" placeholder="Edad">
			<br><br>
			<label for="correo">Correo</label>
			<input type="correo" id="correo" name="correo" placeholder="Correo">
			<br><br>
			<label for="contrasena">Contraseña</label>
			<input type="contrasena" id="correo" name="contrasena">
			<br><br>
			<button type="submit">Registrar</button>
		</form>
	</div>

</body>
<footer>
	<div class="text-center text-dar p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		<i class="bi bi-badge-cc"></i>2022:
		<a class="text-dark" href="#">Tienda online, </a>
	</div>
</footer>
</div>
</html>