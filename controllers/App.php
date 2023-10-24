<?php

	class AppController {

		public function __construct(){
			require_once "models/AppModel.php";
		}

		/*Funcion que verifica la existencia de la cuenta y el tipo de usuario*/
		public function verifyLogin(){
			$obj = new App_model;

			$schoolEnrollment = $_POST['user'];
			$mail = $_POST['mail'];
			$password = $_POST['psswd'];
			/*USUARIOS*/
			$data["user"] = $obj->verifyLogin($schoolEnrollment,$mail,$password);
			$data["usersTotal"] = $obj->countUsers();
			$data["usersAmdmins"] = $obj->countAdmins();
			$data["usersConsultants"] = $obj->countConsultants();
			$data["usersStudents"] = $obj->countStudents();
			/*CITAS*/
			$data["citasTotales"] = $obj->countDates();
			$data["citasAceptadas"] = $obj->countAceptedDates();
			$data["citasRechazadas"] = $obj->countDeclinedDates();
			$data["citasPendientes"] = $obj->countPendingDates();


			if($data["user"] != null){
				switch ($data["user"]["rol"]) {
					case 'admin':
						require_once "views/app/admin/index.php";
						break;
					case 'student':
						require_once "views/app/student/index.php";
						break;
					case 'consultant':
						require_once "views/app/consultant/index.php";
						break;

					default:
						// code...
						break;
				}
			}else{
				echo "Correo o Contraseña incorrectos";
			}
		}

		/*VISTAS PARA EL ADMINISTRADOR*/
		public function indexAdmin(){
			$obj = new App_model;
			/*USUARIOS*/
			$data["usersTotal"] = $obj->countUsers();
			$data["usersAmdmins"] = $obj->countAdmins();
			$data["usersConsultants"] = $obj->countConsultants();
			$data["usersStudents"] = $obj->countStudents();
			/*CITAS*/
			$data["citasTotales"] = $obj->countDates();
			$data["citasAceptadas"] = $obj->countAceptedDates();
			$data["citasRechazadas"] = $obj->countDeclinedDates();
			$data["citasPendientes"] = $obj->countPendingDates();
			require_once "views/app/admin/index.php";
		}
		public function consultantsAdmin(){
			$obj = new App_model;
			$data["users"] = $obj->getUsers('consultant');
			require_once "views/app/admin/consultants.php";
		}
		public function modificarConsultor($id){
			$obj = new App_model;
			$data["id"] = $id;
			$data["user"] = $obj->getUser($id);

			require_once "views/app/admin/mofifyConsultant.php";
		}
		public function nuevoConsultor(){
			require_once "views/app/admin/newConsultant.php";
		}
		public function guardaConsultor(){
			$obj = new App_model;
			$nombre = $_POST['name'];
			$aP = $_POST['lastName'];
			$aM = $_POST['maternalSurname'];
			$user = $_POST['user'];
			$tel = $_POST['telefono'];
			$obj->newConsultant($nombre, $aP, $aM, $user, '@utpuebla.edu.mx','pass1234', $tel,'consultant');
			$this->consultantsAdmin();
		}
		public function actualizaConsultor(){
			$obj = new App_model;
			$id = $_POST['id'];
			$nombre = $_POST['name'];
			$aP = $_POST['lastName'];
			$aM = $_POST['maternalSurname'];
			$user = $_POST['user'];
			$tel = $_POST['telefono'];
			$obj->modifyConsultant($id,$nombre,$aP,$aM,$user,$tel);
			$this->consultantsAdmin();
		}

		public function borraConsultor($id){
			$obj = new App_model;
			$obj->deleteConsultant($id);
			$this->consultantsAdmin();
		}
		public function datesAdmin(){
			$obj = new App_model;
			$data["dates"] = $obj->getDates();
			require_once "views/app/admin/dates.php";
		}
		/*VISTAS PARA EL CONSULTOR*/
		public function indexConsultant(){
			$obj = new App_model;
			/*CITAS*/
			$data["citasTotales"] = $obj->countDates();
			$data["citasAceptadas"] = $obj->countAceptedDates();
			$data["citasRechazadas"] = $obj->countDeclinedDates();
			$data["citasPendientes"] = $obj->countPendingDates();
			require_once "views/app/consultant/index.php";
		}
		public function datesConsultant(){
			$obj = new App_model;
			$data["dates"] = $obj->getDatesPending();
			require_once "views/app/consultant/dates.php";
		}
		public function acceptDate($id){
			$obj = new App_model;
			$obj->acceptDate($id);
			$this->datesConsultant();
		}

		public function declineDate($id){
			$obj = new App_model;
			$obj->declineDate($id);
			$this->datesConsultant();
		}
		/*VISTAS PARA EL ESTUDIANTE*/
		public function indexStudent(){
			$obj = new App_model;
			require_once "views/app/student/index.php";
		}
		public function datesStudent(){
			$obj = new App_model;
			require_once "views/app/student/dates.php";
		}

		public function newDate(){
			require_once "views/app/student/newDate.php";
		}


	}
?>