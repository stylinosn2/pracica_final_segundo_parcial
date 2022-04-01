<!DOCTYPE html>
<html>
<head>
	<title>Eliminacion uwu</title>
</head>
<body>
	<div class="container">
		<h1>Registros Actuales</h1>
		<table>
			<thead>
				<tr>
					
					<th>ID</th>
					<th>Correo</th>
					<th>Contraseña</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios as $correo) { ?>
				<tr>
					<td><?php echo $correo['id_usuario']; ?></td>
					<td><?php echo $correo['nombre']; ?></td>
					<td><?php echo $correo['apellidos']; ?></td>
					<td><?php echo $correo['edad']; ?></td>
					<td><?php echo $correo['correo']; ?></td>
					<td><?php echo $correo['contrasena']; ?></td>
					<td><a type="button" href="<?php echo base_url(); ?>/Home/eliminarRegistro/ <?php echo $correo['id_usuario']; ?>">Eliminar</a></td>
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
</html>