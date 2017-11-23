<?php

class UserController
{
	// Log in and Registration = 2 in 1 (html form has 2 in 1 option)
	public function actionLogin()
	{
		
		$action = 'Login'; // for title in html
		$email = '';
		$password = '';
		$login = '';
		$result = false; // for html
		
		// log in
		if (isset($_POST['submitent'])) {
			
			
			$password = $_POST['password'];
			$login = $_POST['login'];
			
			$errors = false;
			
			// fields validation
			if (!User::checkLogin($login)) {
				$errors[] = 'Неправильный логин - нужно 4+ символов';
			}
			
			/*
			# проверка почты - только по желанию, если чел ввёл что-то
			if (!empty($_POST['email'])) {
				if (!User::checkEmail($email)) {
					$errors[] = 'Неправильный Email - нужно корректно ввести';
				}
			}
			*/
			
			if (!User::checkPassword($password)) {
				$errors[] = 'Неправильный пароль - нужно 6+ символов';
			}
			 // check user in Db
			 $userId = User::checkUserData($login, $password);
			 
			 if ($userId == false) {
				 // if data is invalid - show warning message
				 $errors[] = 'Неправильные данные для входа на сайт';
			 } else {
				 // if data is valid - save user to session and give him admin rights
				 User::auth($userId);
				 header("Location: /admin");
				
			 }
		
			
		}
		
		// registration
		if (isset($_POST['submitreg']))
		{
			
			$login = $_POST['login'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			
			$errors = false;
			
			if(!User::checkLogin($login))
			{
				$errors[] = 'Имя не должно быть короче 2-х символов';
			}
			
			if(!User::checkEmail($email))
			{
				$errors[] = 'Неправильный email';
			}
			
			if(!User::checkPassword($password))
			{
				$errors[] = 'Пароль не должен быть короче 6-ти символов';
			}
			
			if(User::checkEmailExists($email))
			{
				$errors[] = 'Такой email уже используется';
			}
			
			// if we have no errors in form - register user in Db
			if($errors == false)
			{
				$result = User::register($login, $email, $password);
				
			}
			
			
			
			
		}
		require_once(ROOT . '/views/login.php');
			
		return true;
				
	}
	
	/**
	* Delete user from session
	*/
	public function actionLogout()
	{
		unset($_SESSION['user']);
		header("Location: /");
	}
	
	
}