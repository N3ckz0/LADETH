<?php

	class Login_model
	{
		private $db;
		private $users;

		function __construct()
		{
			/*CONEXION A LA BASE DE DATOS*/
			$this->db = Conectar::conexion();
			$this->users = array();
		}

		public function verifyLogin($schoolEnrollment,$mail,$password)
		{
			$sql = "SELECT * FROM usuarios WHERE matricula='$schoolEnrollment' AND correo='$mail' AND contrasena='$password'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function verifyLoginUser($user,$mail,$password)
		{
			$sql = "SELECT * FROM usuarios WHERE usuario='$user' AND correo='$mail' AND contrasena='$password'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

	}

?>