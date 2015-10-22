<?php

	require_once 'IWebServiciable.php';
	require_once 'database/db_connect.php';
	
	session_start();
	const PARAM_ACTION = 'action';
	const REGISTER_ADMIN = 'register';
	const LOGOUT_USER = 'logout';
	const GET_VERIF_USER = 'login';
	// const REMOVE_USER = 'remove';
	// const MODIFY_USER = 'modify';
	// const SQL_GET_ALL_USER = "SELECT idAdmin, login, password FROM admin";
	// const SQL_GET_VERIF_USER = "SELECT password FROM admin WHERE login=".$login." AND password=".$password"";
	
	class WS_USER implements IWebServiciable
	{
		
		public function DoGet()
		{
			if (!isset($_GET[PARAM_ACTION]))
				Access::ThrowAccessDenied();

			switch ($_GET[PARAM_ACTION])
			{
				case GET_VERIF_USER:
					return $this->getVerifUser();

				case LOGOUT_USER:
					return $this->logout();
					
				case REGISTER_ADMIN:
					return $this->register();
					
				case REMOVE_USER:
					return $this->remove();

				default:
					Access::ThrowAccessDenied();
					break;
			}
		}
		
		private function getVerifUser(){
			$login = $_GET['login'];
			$password = $_GET['password'];
			
			
			$sql = "SELECT password FROM admin WHERE login='".$login."' AND password='".$password."'";
			
			MySQL::Execute($sql);
			$verif = MySQL::GetResult()->fetchAll();
			
			if(count($verif) !== 0){
				$_SESSION['Logged'] = 1;
				// var_dump($_SESSION['Logged']);
				return true;
			}
			else{
				return false;
			}
		}
		
		private function logout(){
			
			if (isset($_SESSION['Logged']) && $_SESSION['Logged'] !== 0){
				$_SESSION['Logged'] = 0; 
				return true;
			}	
			return false;
			
		}
		
		private function getAllUser(){
			MySQL::Execute(SQL_GET_ALL_USER);

			return MySQL::GetResult()->fetchAll();
		}
		
		private function register(){
			
			if (!isset($_GET['login']) || !isset($_GET['password']))
				Access::ThrowAccessDenied();
			
			MySQL::Execute("INSERT INTO admin(login, password) VALUES ('".$_GET['login']."','".$_GET['password']."')");
		}
		
		private function remove(){
			if (!isset($_GET['idAdmin']))
				Access::ThrowAccessDenied();
			MySQL::Execute('DELETE FROM admin WHERE idAdmin='.$_GET['idAdmin']);
			
		}
		
		public function DoPost()
		{
			Access::ThrowAccessDenied();
		}
		
		public function DoPut()
		{
			Access::ThrowAccessDenied();
		}

		public function DoDelete()
		{
			Access::ThrowAccessDenied(); 
		}
	}

	
?>