<!DOCTYPE html>
<html>
<head>
	<div class="text-center text-dar p-3" style="background-color: rgb(250, 235, 215);
		font-family: sans-serif;
		text-align: center;

	">
	<title>Actualizar Registro</title>
</head>
<body>
	<div class="container">
		<h1>Registro Encontrado </h1>

		<form method="POST" action="<?php echo base_url(); ?>/Home/actualizarRegistro1">
			<input type="hidden" id="id_gasto" name="id_gasto" value="<?php echo $id_gasto; 
			<label for="categoria">Categoria</label>
			<input type="categoria" name="categoria" value="<?php echo $categoria; ?>">
			<label for="monto_gasto">Monto de Gasto</label>
			<input type="text" name="monto_gasto" value="<?php echo $monto_gasto; ?>">	
			
			<button type="submit">Actualizar</button>	
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