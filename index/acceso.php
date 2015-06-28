<?php

session_start();

if(isset($_SESSION['user']))
{
		
}else
{
	session_start();
	session_destroy();
	header('location:index.php?error=acceso');
}


?>