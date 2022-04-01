<!DOCTYPE html>
<html>
<head>
	<title>Eliminacion uwu</title>
</head>
<body>
	<div class="text-center text-dar p-3" style="background-color: rgb(250, 235, 215);
		font-family: sans-serif;
		text-align: center;

	">
	<div class="container">
		<h1>Registros Actuales</h1>
		<table>
			<thead>
				<tr>
					
					<th>Categoria</th>
					<th>Monto del Gasto</th>
					<th>Fecha</th>
					<th>Descripcion</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios as $categoria) { ?>
				<tr>
					<td><?php echo $categoria['id_gasto']; ?></td>
					<td><?php echo $categoria['categoria']; ?></td>
					<td><?php echo $categoria['monto_gasto']; ?></td>
					<td><?php echo $categoria['fecha']; ?></td>
					<td><?php echo $categoria['descripcion']; ?></td>
					<td><a type="button" href="<?php echo base_url(); ?>/Home/eliminarRegistro1/ <?php echo $categoria['id_gasto']; ?>">Eliminar</a></td>
				</tr>
				<?php  } ?>
			</tbody>
		</table>


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