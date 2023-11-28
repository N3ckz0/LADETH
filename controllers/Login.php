<?php

	class LoginController
	{

		function __construct()
		{
			require_once "models/LoginModel.php";
			require_once "models/UsersModel.php";
			require_once "models/DatesModel.php";
		}

		public function verifyLogin(){
			session_start();

			$obj = new Login_model;
			$obj2 = new Users_model;
			$obj3 = new Dates_model;

			$schoolEnrollment = $_POST['user'];
			$mail = $_POST['mail'];
			$password = $_POST['psswd'];

			$data["user"] = $obj->verifyLogin($schoolEnrollment,$mail,$password);
			$data["user2"] = $obj->verifyLoginUser($schoolEnrollment,$mail,$password);

			if($data["user"] != null){
				$_SESSION["student"] = $data["user"];
				require_once "views/app/student/index.php";
			}elseif ($data["user2"] != null) {
				switch ($data["user2"]["fkRoles"]) {
				    case "1":
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
				    	$_SESSION["admin"] = $data["user2"];
				        require_once "views/app/admin/index.php";
				        break;
				    case "3":
				    	/*CONTEO DE CITAS*/
				    	$data["AllDates"] = $obj3->countDates();
				    	$data["Pending"] = $obj3->countPendingDates();
				    	$data["Acepted"] = $obj3->countAceptedDates();
				    	$data["Declined"] = $obj3->countDeclinedDates();
				    	$_SESSION["consultant"] = $data["user2"];
				        require_once "views/app/consultant/index.php";
				        break;
				}
			}
			else{
				echo "Correo o Contraseña incorrectos";
			}
		}
	}





?>