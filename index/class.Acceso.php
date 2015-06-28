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
			$db->query("SELECT nombre,password FROM usuarios WHERE NOMBRE = '$this->user' AND PASSWORD='$this->pass';");
			
	}	
	
	public function Registro()
	{
			
	}
	
	public function ClavePerdida()
	{
			
	}
	
}

?>