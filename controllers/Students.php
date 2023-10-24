<?php

	class StudentsController
	{

		function __construct()
		{
			require_once "models/StudentsModel.php";
			require_once "models/DatesModel.php";
			require_once "models/AppModel.php";
		}

		/*REGISTRO DEL ESTUDIANTE*/
		function register()
		{
			/*OBJETO DE ESTUDIANTES*/
			$obj = new Students_model();

			/*OBTENCION DE DATOS*/
			$nombre = $_POST['name'];
			$apellidoP = $_POST['lastName'];
			$apellidoM = $_POST['maternalSurname'];
			$matricula = $_POST['user'];
			$contrasena = $_POST['psswd'];
			$telefono = $_POST['telefono'];
			$grado = $_POST['grado'];
			$grupo = $_POST['grupo'];
			$division = $_POST['division'];

			/*CREA UN NUEVO ESTUDIANTE*/
			$obj->newStudent($nombre, $apellidoP, $apellidoM, $matricula, $contrasena, $telefono, $grado, $grupo, $division);
			require_once "views/page/login.php";
		}

		/*INICIO DE ESTUDIANTE*/
		public function index()
		{
			require_once "views/app/student/index.php";
		}

		/*CITAS DEL ESTUDIANTE*/
		public function dates()
		{
			session_start();
			$id = $_SESSION["student"]["id"];

			$obj = new Dates_model;

			$data["message"] = "";
			$data["dates"] = $obj->DatesPending($id);

			if($data["dates"] != null)
			{
				$_SESSION['dates'] = $data["dates"];
				require_once "views/app/student/dates.php";
			}else{
				$data["message"] = "No tiene citas.";
				require_once "views/app/student/dates.php";
			}
		}

		public function datesAcepted()
		{
    		$estado_session = session_status();

		    if($estado_session == PHP_SESSION_NONE)
		    {
		        session_start();
		    }

			$id = $_SESSION["student"]["id"];

			$obj = new Dates_model;

			$data["message"] = "";
			$data["dates"] = $obj->DatesAceptedOf($id);

			if($data["dates"] != null)
			{
				$_SESSION['dates'] = $data["dates"];
				require_once "views/app/student/datesAcepted.php";
			}else
			{
				$data["message"] = "No tiene citas.";
				require_once "views/app/student/datesAcepted.php";
			}
		}


		/*VISTA PARA CREAR NUEVA CITA DEL ESTUDIANTE*/
		public function newDate(){
			require_once "views/app/student/newDate.php";
		}

		/*CREA UNA NUEVA CITA*/
		public function saveDate()
		{
			$obj = new Dates_model;

			$fecha = $_POST['fecha'];
			$hora = $_POST['hora'];
			$comentario = $_POST['comentario'];
			$especificaciones = $_POST['opcion'];
			$modalidad = $_POST['modalidad'];
			$user = $_POST['id'];

			$obj->newDate($fecha, $hora, $comentario, $especificaciones, $modalidad, $user);
			$this->dates();
		}

		public function profile(){
			session_start();
			$id = $_SESSION["student"]["id"];

			$obj = new App_model;

			$data["message"] = "";
			$data["user"] = $obj->getUser($id);

			if($data["user"] != null)
			{
				$_SESSION['user'] = $data["user"];
				require_once "views/app/student/profile.php";
			}else
			{
				$data["message"] = "El usuario no existe";
				require_once "views/app/student/profile.php";
			}
		}

		public function modifica(){
			require_once "views/app/student/modifyProfile.php";
		}

		public function updateProfile()
		{
			$obj = new App_model;

			$id = $_POST['id'];
			$nombre = $_POST['name'];
			$aP = $_POST['lastName'];
			$aM = $_POST['maternalSurname'];
			$user = $_POST['user'];
			$tel = $_POST['telefono'];
			$obj->modifyProfileUser($id,$nombre,$aP,$aM,$user,$tel);
			$this->profile();

		}

		public function modificaContrasena()
		{
			require_once "views/app/student/modifyPassword.php";
		}

		public function updatePassword()
		{
			$obj = new App_model;

			$id = $_POST['id'];
			$pass = $_POST['newPsswd'];

			$obj->changePassword($pass,$id);
			$this->index();

		}

		public function encuesta($id)
		{
			$encuesta["id"] = $id;
			require_once "views/app/student/encuesta.php";
		}

		public function quiz(){
			session_start();
			$idUser = $_SESSION["student"]["id"];

			$id = $_POST['idEncuesta'];

			$obj = new App_model;

			$data["message"] = "";
			$data["user"] = $obj->changeStatusOfQuiz($id,$idUser);

			$this->datesAcepted();

		}
	}

?>