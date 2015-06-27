<?php
	#Probando nuevo
	if(isset($_GET['error']))
	{
		if($_GET['error'] == 1)
		{
			echo 'ERROR: Debes llenar todos los campos';
		}else if($_GET['error'] == 2)
		{
			echo 'ERROR: Los datos no son correctos';
		}else if($_GET['error'] == 3)
		{
			echo 'ERROR: No intentes saltarte el inicio';
		}
	}
?>

<html>
	<head>
    	<title>Acceso de usuario</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    	<form action="login.php" method="post">
        	<label>Usuario: </label><input type="text" name="user" /><br />
            <label>Contraseña: </label><input type="text" name="pass" /><br />
            <label><input type="checkbox" name="sesion" value="1" /></label><br />
            <input type="submit" value="Clickame aqui" />
        </form>
    </body>
</html>