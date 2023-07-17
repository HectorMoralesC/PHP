<?php 
	require 'consulta.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla de clientes</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="wrap">
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Selecciona un CÓDIGO del artículo a modificar: 
			<select name="codigo" id="codigo">
				<?php foreach ($resultSet as $cliente): ?>
					<option value="<?php echo $cliente['CÓDIGOCLIENTE']; ?>">
						<?php echo $cliente['CÓDIGOCLIENTE']; ?>
					</option>
				<?php endforeach; ?>
			</select>

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Eliminado Correctamente</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Eliminar registro">
		</form>
	</div>
	<h1>CLIENTES</h1>
	<table>
        <tr>
			<th class="delete">DELETE</th>
            <th>CÓDIGOCLIENTE-</th>
            <th>EMPRESA-</th>
            <th>DIRECCIÓN-</th>
            <th>POBLACIÓN-</th>
			<th>TELÉFONO</th>
        </tr>
        <?php foreach ($resultSet as $cliente): ?>
					<tr>
						<td><input type="submit" name="submit" class="delete-boton" value="X"></td>
                        <td><?php echo $cliente['CÓDIGOCLIENTE']; ?></td>
                        <td><?php echo $cliente['EMPRESA']; ?></td>
                        <td><?php echo $cliente['DIRECCIÓN']; ?></td>
                        <td><?php echo $cliente['POBLACIÓN']; ?></td>
                        <td><?php echo $cliente['TELÉFONO']; ?></td>
						<td><form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						<select name="codigo" id="codigo">
							
								<option value="<?php echo $cliente['CÓDIGOCLIENTE']; ?>">
									<?php echo $cliente['CÓDIGOCLIENTE']; ?>
								</option>
						</select>

			<input type="submit" name="submit" class="btn btn-primary" value="X">
		</form></td>
                    </tr>
		<?php endforeach; ?>
    </table>
</body>
</html>