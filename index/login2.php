<?php

$_POST['user'];
$_POST['pass'];
$_POST['sesion'];

if(isset($_POST['user']) and isset($_POST['pass']))
{

	if(empty($_POST['user']) or empty($_POST['pass']))
	{
		header('location:index.php?error=1');
	}else
		{
			if($_POST['user'] == 'Fyreco' and $_POST['pass'] == '12345')
			{
				session_start();
				if($_POST['sesion'] == 1)
				{
					ini_set(session.cookie_lifetime,time() + (60*60*24*365));
					}
				$_SESSION['usuario'] = $_POST['user'];
				header('location:accedido.php');	
			}else
			{
				header('location:index.php?error=2');
			}
		}
}else{
	header('location:index.php?error=3');
	}
?>