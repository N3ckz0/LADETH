<?php

	class WebPageController {

		public function index(){
			require_once "views/page/layout.php";
		}

		public function policies(){
			require_once "views/page/policies.php";
		}

		public function login(){
			require_once "views/page/login.php";
		}

		public function register(){
			require_once "views/page/register.php";
		}

		/*
		public function contact(){
			require_once "views/page/contact.php";
		}

		public function services(){
			require_once "views/page/services.php";
		}

		public function about(){
			require_once "views/page/about.php";
		}

		*/

	}
?>

