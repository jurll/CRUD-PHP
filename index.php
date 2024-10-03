<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post" action="registrar.php">
    	<h1>¡Encuesta!</h1>
    	<input type="text" name="name" placeholder="Nombre completo" required>
    	<input type="email" name="email" placeholder="Email" required>
		<input type="edad" name="edad" placeholder="Edad" required>
		<input type="sugerencias" name="sugerencias" placeholder="sugerencias" required>
    	<input type="submit" name="register" value="Confirmar">
    </form>
</body>
</html>
