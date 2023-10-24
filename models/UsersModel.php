<?php

	class Users_model
	{
		private $db;
		private $users;

		function __construct()
		{
			$this->db = Conectar::conexion();
			$this->users = array();
		}

		public function countUsers()
		{
			$sql = "SELECT count(*) FROM usuarios";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function countAdmins()
		{
			$sql = "SELECT count(*) FROM usuarios WHERE fkRoles='1'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function countConsultants()
		{
			$sql = "SELECT count(*) FROM usuarios WHERE fkRoles='3'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function countStudents()
		{
			$sql = "SELECT count(*) FROM usuarios WHERE fkRoles='2'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}
	}

?>