<?php

	/**
	 *
	 */
	class App_model
	{

		private $db;
		private $users;

		function __construct()
		{
			$this->db = Conectar::conexion();
			$this->users = array();
		}

		public function verifyLogin($schoolEnrollment, $mail, $password)
		{
			$sql = "SELECT * FROM user WHERE matricula='$schoolEnrollment' AND correo='$mail' AND contrasena='$password'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function getUsers($rol){
			$sql = "SELECT * FROM user WHERE rol='$rol'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->users[] = $row;
			}
			return $this->users;
		}

		public function getUser($id){
			$sql = "SELECT * FROM usuarios WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		public function modifyProfileAdmin($id,$nombre,$apellidoP,$apellidoM,$usuario,$telefono){
			$resultado = $this->db->query("UPDATE usuarios SET nombre='$nombre', apellidoPaterno='$apellidoP', apellidoMaterno='$apellidoM', usuario='$usuario', telefono='$telefono' WHERE id='$id'");
		}

		public function modifyProfileUser($id,$nombre,$apellidoP,$apellidoM,$matricula,$telefono){
			$resultado = $this->db->query("UPDATE usuarios SET nombre='$nombre', apellidoPaterno='$apellidoP', apellidoMaterno='$apellidoM', matricula='$matricula', telefono='$telefono' WHERE id='$id'");
		}

		public function getCitas($idUser)
		{
			$sql = "SELECT * FROM cita WHERE fkUser='$idUser'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->users[] = $row;
			}
			return $this->users;
		}

		public function getDates(){
			$sql = "SELECT * FROM cita";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->users[] = $row;
			}
			return $this->users;
		}

		/*public function getDatesPending(){
			$sql = "SELECT * FROM cita WHERE fkEstados = 2";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->users[] = $row;
			}
			return $this->users;
		}*/

		public function changePassword($newPass,$id){
			$resultado = $this->db->query("UPDATE usuarios SET contrasena='$newPass' WHERE id='$id'");
		}

		public function changeStatusOfQuiz($id,$idUser){
			$resultado = $this->db->query("UPDATE citas SET encuesta='si' WHERE id='$id' AND fkUsuarios='$idUser'");
		}
	}

?>
