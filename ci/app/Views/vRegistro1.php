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
		<h1>Bienvenido al registro de gastos de usuarios que hacen por mes.</h1>
		<h2>Registro para un usuario</h2>
		<form method="POST" action="../Home
		/insertarGastos">
			<label for="categoria">Categoria</label>
			<input type="categoria" id="categoria" name="categoria" placeholder="Categoria">
			<br><br>
			<label for="monto_gasto">Monto del gasto</label>
			<input type="monto_gasto" id="monto_gasto" name="monto_gasto" placeholder="Monto_gasto">
			<br><br>
			<label for="fecha">Fecha</label>
			<input type="date" id="fecha" name="fecha" placeholder="Fecha">
			<br><br>
			<label for="descripcion">Descripcion</label>
			<input type="descripcion" id="descripcion" name="descripcion" placeholder="Descripcion">
			<br><br>
			<label for="id_gasto">Id Gasto</label>
			<input type="id_gasto" id="id_gasto" name="id_gasto" placeholder="id_gasto">
			<button type="submit">Añadir</button>
		</form>
	</div>

</body>
<footer>
	<div class="text-center text-dar p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		<i class="bi bi-badge-cc"></i>2022:
		<a class="text-dark" href="#">Luis </a>
	</div>
</footer>
</div>
</html>