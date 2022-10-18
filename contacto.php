<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Contacto</title>
		<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" media="all" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

	</head>

	<body>
		<?php include 'menu.php' ?>
		<div id="Contacto" class="container">
			<div id="divform">
				<form action="envioCorreo.php" method="post">
					<label><b>Nombre:</b></label>

					<input name="nombre" placeholder="Nombre" type="text" required />

					<label><b>Apellido:</b></label>

					<input name="apellido" placeholder="Apellido" type="text" required />

					<label> <b>Teléfono(opcional):</b></label>

					<input name="telefono" placeholder="Telefono" type="text" />

					<label><b>Email:</b></label>

					<input name="email" placeholder="user@email.com" type="text" required />

					<label><b>Consulta</b></label>

					<textarea name="mensaje" rows="6" cols="50" required></textarea>

					<input type="submit" value="Enviar" />

				</form>
			</div>
		</div>
		<footer></footer>
	</body>
</html>