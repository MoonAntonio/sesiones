<?php

	require('/class.Conexion.php');

	$db = new Conexion();

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>p_Test03</title>
</head>
<body>
	<h1>Login</h1>

    <form action="index.php?modo=login" method="post">
    <label>User: </label><input type="text" name="user"/>
    <label>Pass: </label><input type="password" name="pass"/>
    <input type="hidden" name="login" value="1"/>
    <input type="submit" value="Iniciar Sesion"/>
    </form>
</body>
</html>