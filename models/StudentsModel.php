<?php

	class Students_model
	{
		private $db;
		private $users;

		function __construct()
		{
			$this->db = Conectar::conexion();
			$this->users = array();
		}

		public function newStudent($nombre, $apellidoP, $apellidoM, $matricula, $contrasena, $telefono, $grado, $grupo, $division){
			$resultado = $this->db->query("INSERT INTO usuarios (nombre,apellidoPaterno,apellidoMaterno,matricula,usuario,correo,contrasena,telefono,grado,grupo,fkDivisiones,fkRoles) VALUES ('$nombre','$apellidoP','$apellidoM','$matricula',null,'@alumno.utpuebla.edu.mx','$contrasena','$telefono','$grado','$grupo','$division',2)");
		}
	}

?>