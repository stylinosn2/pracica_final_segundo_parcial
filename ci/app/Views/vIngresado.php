<!DOCTYPE html>
<html>
<head>
	<title>INGRESADO :D</title>
</head>
<body>
	<div class="container">
		<h1>Registro Actual Ingresado :o</h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Usuario</th>
					<th>Contraseña</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $id_usuario; ?></td>
					<td><?php echo $correo; ?></td>
					<td><?php echo $contrasena; ?></td>
				</tr>
				
			</tbody>
		</table>
		<form method="POST" action="<?php echo base_url(); ?>/Home/buscarRegistro"> 
			<input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>">
			<button type="submit">Actualizar datos</button>
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