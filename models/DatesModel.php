<?php

	class Dates_model
	{
		private $db;
		private $dates;

		function __construct()
		{
			$this->db = Conectar::conexion();
			$this->dates = array();
		}

		/*CALCULA EL TOTAL DE CITAS*/
		public function countDates()
		{
			$sql = "SELECT count(*) FROM citas";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		/*CALCULA EL TOTAL DE CITAS PENDIENTES*/
		public function countPendingDates()
		{
			$sql = "SELECT count(*) FROM citas WHERE fkEstados='1'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		/*CALCULA EL TOTAL DE CITAS ACEPTADAS*/
		public function countAceptedDates()
		{
			$sql = "SELECT count(*) FROM citas WHERE fkEstados='2'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		/*CALCULA EL TOTAL DE CITAS RECHAZADAS*/
		public function countDeclinedDates()
		{
			$sql = "SELECT count(*) FROM citas WHERE fkEstados='3'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();
			return $row;
		}

		/*OBTIENE TODAS LAS CITAS*/
		public function getDates()
		{
			$sql = "SELECT * FROM citas";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->dates[] = $row;
			}
			return $this->dates;
		}

		/*OBTIENE LAS CITAS PENDIENTES*/
		public function getDatesPending()
		{
			$sql = "SELECT * FROM citas WHERE fkEstados = 1";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->dates[] = $row;
			}
			return $this->dates;
		}

		/*CAMBIA EL ESTADO DE LA CITA COMO ACEPTADA*/
		public function acceptDate($id)
		{
			$resultado = $this->db->query("UPDATE citas SET fkEstados=2 WHERE id='$id'");
		}

		/*CAMBIA EL ESTADO DE LA CITA COMO RECHAZADA*/
		public function declinedDate($id)
		{
			$resultado = $this->db->query("UPDATE citas SET fkEstados=3 WHERE id='$id'");
		}

		/*CREA UNA NUEVA CITA*/
		public function newDate($fecha, $hora, $comentario, $especificaciones, $modalidad, $user)
		{
			$resultado = $this->db->query("INSERT INTO citas (fecha,hora,comentario,encuesta,fkEspecificaciones,fkModalidades,fkEstados,fkUsuarios) VALUES ('$fecha', '$hora', '$comentario', 'no', '$especificaciones', '$modalidad', '1', '$user')");
		}

		/*OBTIENE LAS CITAS PENDIENTES DE UN ESTUDIANTE ESPECIFICO*/
		public function DatesPending($id)
		{
			$sql = "SELECT * FROM citas WHERE fkEstados = 1 AND fkUsuarios = '$id'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->dates[] = $row;
			}
			return $this->dates;
		}

		/*OBTIENE LAS CITAS ACEPTADAS DE UN ESTUDIANTE ESPECIFICO*/
		public function DatesAceptedOf($id)
		{
			$sql = "SELECT * FROM citas WHERE fkEstados = 2 AND fkUsuarios = '$id'";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->dates[] = $row;
			}
			return $this->dates;
		}
	}

?>