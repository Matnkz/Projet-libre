<?php
	require_once('model/MembersManager.php');
	
	class MainController {
		public function registerAction($name, $firstname, $mail_address, $password) {
			$membersManager = new MembersManager();
			
			$register = $membersManager->addMember($name, $firstname, $mail_address, $password);
			
			if ($register === false)
				throw new Exception('Action impossible');
			else
				header('Location:index.php');
		}
		
		public function connexionAction($mail_address, $password) {
			$membersManager = new MembersManager();
			$login = $membersManager->memberConnexion($mail_address, $password);
			$passwordVerify = $login->fetch();
			
			if (!$passwordVerify)
			{
				echo 'Adresse e-mail ou mot de passe incorrect';
			} else {
				if (password_verify($password, $passwordVerify['password']))
				{
					session_start();
					$_SESSION['ID_REGISTER'] = $passwordVerify['ID_REGISTER'];
					$_SESSION['REGNAME'] = $passwordVerify['REGNAME'];
					$_SESSION['REGFNAME'] = $passwordVerify['REGFNAME'];
					$_SESSION['REGMAIL'] = $passwordVerify['REGMAIL'];
					
					header('Location:index.php?action=home');
				} else {
					echo 'Adresse e-mail ou mot de passe incorrect';
				}
			}
		}
		
		public function logout() {
			session_start();		
			$_SESSION = array();		
			session_destroy;
		
			header('Location:index.php');
		}
	}
