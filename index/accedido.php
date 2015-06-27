<?php
session_start();

if(isset($_SESSION['usuario']))
{
	echo 'Bienvenido ',$_SESSION['usuario'],' a esta sesion';
}else if (!isset($_SESSION['usuario']))
{
	session_start();
	session_destroy();
	header('location: index.php?error=4');
	
	}
?>