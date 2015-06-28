<?php

	require('/class.Conexion.php');

	$db = new Conexion();
	
	$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';
	
	switch($modo)
	{
		case 'login':
			if(isset($_POST['login']))
			{
				if(!empty($_POST['user']) and !empty($_POST['pass']))
				{
					include('/class.Acceso.php');
					$login = new Acceso();
					$login->Login();	
				}else
				{
					header('location: index.php');
				}
			}else
			{
				header('location:index.php');
			}
			break;
			
		case 'registro':
			echo 'registro';
			break;
			
		case 'claveperdida':
			echo 'clave perdida';
			break;	
			
		default:
		
		break;
	}

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