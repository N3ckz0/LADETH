<?php

	class ConsultantController
	{

		function __construct()
		{
			require_once "models/DatesModel.php";
			require_once "models/ConsultantModel.php";
			require_once "models/AppModel.php";
		}

		public function index()
		{
			$obj3 = new Dates_model;
			/*CONTEO DE CITAS*/
			$data["AllDates"] = $obj3->countDates();
			$data["Pending"] = $obj3->countPendingDates();
			$data["Acepted"] = $obj3->countAceptedDates();
			$data["Declined"] = $obj3->countDeclinedDates();
			require_once "views/app/consultant/index.php";
		}

		public function dates()
		{
			$obj = new Dates_model;

			$data["dates"] = $obj->getDatesPending();
			require_once "views/app/consultant/dates.php";
		}

		public function acceptDate($id)
		{
			$obj = new Dates_model;

			$obj->acceptDate($id);
			$this->dates();
		}

		public function declinedDate($id){
			$obj = new Dates_model;

			$obj->declinedDate($id);
			$this->dates();
		}

		public function profile(){
			session_start();
			$id = $_SESSION["consultant"]["id"];

			$obj = new App_model;

			$data["message"] = "";
			$data["user"] = $obj->getUser($id);

			if($data["user"] != null)
			{
				$_SESSION['user'] = $data["user"];
				require_once "views/app/consultant/profile.php";
			}else
			{
				$data["message"] = "El usuario no existe";
				require_once "views/app/consultant/profile.php";
			}
		}

		public function modifica(){
			require_once "views/app/consultant/modifyProfile.php";
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
			require_once "views/app/consultant/modifyPassword.php";
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