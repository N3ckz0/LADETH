<?php

	class Consultant_model
	{
		private $db;
		private $users;

		function __construct()
		{
			$this->db = Conectar::conexion();
			$this->users = array();
		}

		public function newConsultant($nombre, $apellidoP, $apellidoM, $usuario, $telefono)
		{
			$resultado = $this->db->query("INSERT INTO usuarios (nombre,apellidoPaterno,apellidoMaterno,matricula,usuario,correo,contrasena,telefono,grado,grupo,fkDivisiones,fkRoles) VALUES ('$nombre','$apellidoP','$apellidoM',null,'$usuario','@utpuebla.edu.mx','pass1234','$telefono',null,null,null,3)");
		}

		public function getConsultants()
		{
			$sql = "SELECT * FROM usuarios WHERE fkRoles='3'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->users[] = $row;
			}
			return $this->users;
		}

		public function getConsultant($id){
			$sql = "SELECT * FROM usuarios WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function modifyConsultant($id,$nombre,$apellidoP,$apellidoM,$usuario,$telefono){
			$resultado = $this->db->query("UPDATE usuarios SET nombre='$nombre', apellidoPaterno='$apellidoP', apellidoMaterno='$apellidoM', usuario='$usuario', telefono='$telefono' WHERE id='$id'");
		}

		public function deleteConsultant($id)
		{
			$resultado = $this->db->query("DELETE FROM usuarios WHERE id = '$id'");
		}
	}

?>