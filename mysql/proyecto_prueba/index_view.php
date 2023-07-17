<?php require 'consulta.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscar registros</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="wrap">
		<h1>Búsqueda de CLIENTES</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			Selecciona un código cliente para buscar: 
			<select name="codigo" id="codigo">
				<option valure=""></option>
				<?php foreach ($resultadosConsulta as $resultadoConsulta): ?>
					<option>
						<?php echo $resultadoConsulta['CÓDIGOCLIENTE']; ?>
					</option>
				<?php endforeach; ?>
			</select>
			<br>
			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado): ?>
				<div class="alert success">
					<p>Buscando cliente correctamente <?php echo $codigo; ?></p>
				</div>
			<?php endif ?>

			<input type="submit" name="submit" class="btn btn-primary" value="Buscar cliente">
	
		</form>
	</div>
	
	
	
	<div class="wrap">
        <h1>Actualizar tabla de clientes</h1>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        Selecciona un CÓDIGO del artículo a modificar: 
			<select name="codigo" id="codigo">
				<option valure=""></option>
				<?php foreach ($resultadosConsulta as $articulo): ?>
					<option>
						<?php echo $articulo['CÓDIGOCLIENTE']; ?>
					</option>
			<?php endforeach; ?>
			</select>
        Selecciona el CAMPO a modificar: 
			<select name="campo" id="campo">
				<option valure=""></option>
				<option value='EMPRESA'>EMPRESA</option>
				<option value='DIRECCIÓN'>DIRECCIÓN</option>
				<option value='POBLACIÓN'>POBLACIÓN</option>
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
            <th>CÓDIGOCLIENTE</th>
            <th>EMPRESA</th>
            <th>DIRECCIÓN</th>
            <th>POBLACIÓN</th>
            
        </tr>
        <?php foreach ($resultadosConsulta as $tabla): ?>
					<tr>
                        <td><?php echo $tabla['CÓDIGOCLIENTE']; ?></td>
                        <td><?php echo $tabla['EMPRESA']; ?></td>
                        <td><?php echo $tabla['DIRECCIÓN']; ?></td>
                        <td><?php echo $tabla['POBLACIÓN']; ?></td>
                    
                    </tr>
		<?php endforeach; ?>
    </table>
	
</body>
</html>
