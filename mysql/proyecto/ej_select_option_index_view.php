<?php require 'consulta_select_option.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscar registros</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos_select_option.css">
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
        <table style="width:100%">
            <tr>
                <th >CÓDIGOARTÍCULO</th>
                <th>SECCIÓN</th>
                <th>NOMBREARTÍCULO</th>
                <th>PRECIO</th>
            </tr>
            <tr>
                <td><?php foreach ($resultadosConsulta as $resultadoConsulta): ?>
					<option>
						<?php echo $resultadoConsulta['CÓDIGOARTÍCULO']; ?>
					</option>
				<?php endforeach; ?></td>
                <td><?php foreach ($resultadosConsulta1 as $resultadoConsulta1): ?>
					<option>
						<?php echo $resultadoConsulta1['SECCIÓN']; ?>
					</option>
				<?php endforeach; ?></td>
                <td><?php foreach ($resultadosConsulta2 as $resultadoConsulta2): ?>
					<option>
						<?php echo $resultadoConsulta2['NOMBREARTÍCULO']; ?>
					</option>
				<?php endforeach; ?></td>
                <td><?php foreach ($resultadosConsulta3 as $resultadoConsulta3): ?>
					<option>
						<?php echo $resultadoConsulta3['PRECIO']; ?>
					</option>
				<?php endforeach; ?></td>
            </tr>
            
        </table>
	</div>
</body>
</html>
