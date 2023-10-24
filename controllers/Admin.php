<?php

	class AdminController
	{

		function __construct()
		{
			require_once "models/DatesModel.php";
			require_once "models/UsersModel.php";
			require_once "models/ConsultantModel.php";
			require_once "models/AppModel.php";
		}

		function index(){
			$obj2 = new Users_model;
			$obj3 = new Dates_model;
			/*CONTEO DE USUARIOS*/
			$data["AllUsers"] = $obj2->countUsers();
			$data["Admins"] = $obj2->countAdmins();
			$data["Consultants"] = $obj2->countConsultants();
			$data["Students"] = $obj2->countStudents();
			/*CONTEO DE CITAS*/
			$data["AllDates"] = $obj3->countDates();
			$data["Pending"] = $obj3->countPendingDates();
			$data["Acepted"] = $obj3->countAceptedDates();
			$data["Declined"] = $obj3->countDeclinedDates();
			require_once "views/app/admin/index.php";
		}

		function consultants(){
			$obj = new Consultant_model;

			$data["consultants"] = $obj->getConsultants();
			require_once "views/app/admin/consultants.php";
		}

		function newConsultant()
		{
			require_once "views/app/admin/newConsultant.php";
		}

		function saveConsultant()
		{
			$obj = new Consultant_model;

			$nombre = $_POST['name'];
			$aP = $_POST['lastName'];
			$aM = $_POST['maternalSurname'];
			$user = $_POST['user'];
			$tel = $_POST['telefono'];
			$obj->newConsultant($nombre, $aP, $aM, $user, $tel);
			$this->consultants();
		}

		function modifyConsultant($id)
		{
			$obj = new Consultant_model;

			$data["id"] = $id;
			$data["consultant"] = $obj->getConsultant($id);
			require_once "views/app/admin/modifyConsultant.php";
		}

		public function updateConsultant()
		{
			$obj = new Consultant_model;

			$id = $_POST['id'];
			$nombre = $_POST['name'];
			$aP = $_POST['lastName'];
			$aM = $_POST['maternalSurname'];
			$user = $_POST['user'];
			$tel = $_POST['telefono'];
			$obj->modifyConsultant($id,$nombre,$aP,$aM,$user,$tel);
			$this->consultants();

		}

		public function deleteConsultant($id)
		{
			$obj = new Consultant_model;

			$obj->deleteConsultant($id);
			$this->consultants();
		}

		public function dates()
		{
			$obj = new Dates_model;

			$data["dates"] = $obj->getDates();
			require_once "views/app/admin/dates.php";
		}

		public function profile(){
			session_start();
			$id = $_SESSION["admin"]["id"];

			$obj = new App_model;

			$data["message"] = "";
			$data["user"] = $obj->getUser($id);

			if($data["user"] != null)
			{
				$_SESSION['user'] = $data["user"];
				require_once "views/app/admin/profile.php";
			}else
			{
				$data["message"] = "El usuario no existe";
				require_once "views/app/admin/profile.php";
			}
		}

		public function modifica(){
			require_once "views/app/admin/modifyProfile.php";
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
			$obj->modifyProfileAdmin($id,$nombre,$aP,$aM,$user,$tel);
			$this->profile();

		}

		public function modificaContrasena()
		{
			require_once "views/app/admin/modifyPassword.php";
		}

		public function updatePassword(){
			$obj = new App_model;

			$id = $_POST['id'];
			$pass = $_POST['newPsswd'];

			$obj->changePassword($pass,$id);
			$this->index();

		}
	}

?>