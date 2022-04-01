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
		<h1>Buscador de gastos</h1>
		<form method="POST" action="<?php echo base_url(); ?>/Home/ingresarForm1">
			<label for="categoria">Categoria</label>
			<input  type="categoria" id="categoria" name="categoria" placeholder="Categoria"></input>
			<label for="monto_gasto">Monto del Gasto</label>
			<input  type="monto_gasto" id="monto_gasto" name="monto_gasto" placeholder="monto_gasto"></input>
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