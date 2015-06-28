<?php

class Acceso
{
	protected $user;
	protected $pass;
	
	public function __construct($usuario,$password)
	{
		$this->user = $usuario;
		$this->pass = $password;
	}
	
	public function Login()
	{
			$db = new Conexion();
			$sql = $db->query("SELECT nombre,password FROM usuarios WHERE NOMBRE = '$this->user' AND PASSWORD='$this->pass';");
			$dato = $db->recorrer($sql);
			$dato['nombre'];
			$dato['password'];
			
			if($dato['nombre'] == $this->user and $dato['password'] == $this->pass)
			{
				$_SESSION['user'] = $this->user;
				header('location: acceso.php');	
			}else
			{
				header('location: index.php');
			}
	}	
	
	public function Registro()
	{
			
	}
	
	public function ClavePerdida()
	{
			
	}
	
}

?>