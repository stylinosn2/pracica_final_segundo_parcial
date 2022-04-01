<!DOCTYPE html>
<html>
<head>

	<title>INGRESADO :D</title>
</head>
<div class="text-center text-dar p-3" style="background-color: rgb(250, 235, 215);
		font-family: sans-serif;
		text-align: center;

	">
<body>
	<div class="container">
		<h1>Registro Actual Ingresado :o</h1>
		<table>
			<thead>
				<tr>
				<th>ID_GASTO</th>
					<th>Categoria</th>
					<th>Monto del Gasto</th>
				</tr>
			</thead>
			<tbody>
				<tr>
				<td><?php echo $id_gasto; ?></td>
					<td><?php echo $categoria; ?></td>
					<td><?php echo $monto_gasto; ?></td>
				</tr>
				
			</tbody>
		</table>
		<form method="POST" action="<?php echo base_url(); ?>/Home/buscarRegistro1"> 
			<input type="hidden" name="id_gasto" value="<?php echo $id_gasto; ?>">
			<button type="submit">Actualizar datos</button>
		</form>
	</div>
</body>
</div>
<footer>
	<div class="text-center text-dar p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		<i class="bi bi-badge-cc"></i>2022:
		<a class="text-dark" href="#">Luis</a>
	</div>
	</footer>
</html>