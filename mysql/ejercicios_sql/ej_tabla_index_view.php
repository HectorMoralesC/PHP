<?php require 'ej_tabla_consulta.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Actualizar registros</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilo_tabla.css">
</head>
<body>
	<div class="wrap">
        <h1>Actualizar tabla de productos</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Selecciona un CÓDIGO del artículo a modificar: 
			<select name="codigo" id="codigo">
				<option valure=""></option>
				<?php foreach ($resultadosTabla as $articulo): ?>
					<option>
						<?php echo $articulo['CÓDIGOARTÍCULO']; ?>
					</option>
			<?php endforeach; ?>
			</select>
        Selecciona el CAMPO a modificar: 
			<select name="campo" id="campo">
				<option valure=""></option>
				<option value='SECCIÓN'>SECCIÓN</option>
				<option value='NOMBREARTÍCULO'>NOMBREARTÍCULO</option>
				<option value='PRECIO'>PRECIO</option>
			</select>
			<p>Escribe el cambio que se actualizará en ese registro</p>
			<input type="text" class="form-control" id="canvi" name="canvi" value="<?php if(!$enviado && isset($canvi)) echo $canvi ?>"> 

			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Actualizado Correctamente</p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Actualizar registro">
		</form>
	</div>
    <table>
        <tr>
            <th>CÓDIGOARTÍCULO</th>
            <th>SECCIÓN</th>
            <th>NOMBREARTÍCULO</th>
            <th>PRECIO</th>
        </tr>
        <?php foreach ($resultadosTabla as $tabla): ?>
					<tr>
                        <td><?php echo $tabla['CÓDIGOARTÍCULO']; ?></td>
                        <td><?php echo $tabla['SECCIÓN']; ?></td>
                        <td><?php echo $tabla['NOMBREARTÍCULO']; ?></td>
                        <td><?php echo $tabla['PRECIO']; ?></td>
                    </tr>
		<?php endforeach; ?>
    </table>
</body>
</html>