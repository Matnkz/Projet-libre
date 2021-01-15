<?php
	require_once('model/DatabaseConnexion.php');
	
	class MembersManager extends DatabaseConnexion {
		public function addMember($name, $firstname, $mail_address, $password) {
			$database = DatabaseConnexion::getLocalConnexion();
			
			$password_hash = crypt($password);
			
			$newMember = $database->prepare('INSERT INTO t_register(REGNAME, REGFNAME, REGMAIL, REGPWD) VALUES(:REGNAME, :REGFNAME, :REGMAIL, :REGPWD)');
			$newMember->bindValue(':REGNAME', htmlspecialchars($name), PDO::PARAM_STR);
			$newMember->bindValue(':REGFNAME', htmlspecialchars($firstname), PDO::PARAM_STR);
			$newMember->bindValue(':REGMAIL', htmlspecialchars($mail_address), PDO::PARAM_STR);
			$newMember->bindValue(':REGPWD', htmlspecialchars($password_hash), PDO::PARAM_STR);
			
			$register = $newMember->execute();

			return $register;
		}
		
		public function memberConnexion($mail_address, $password) {
			$database = DatabaseConnexion::getLocalConnexion();
			
			$login = $database->prepare('SELECT ID_REGISTER, REGNAME, REGFNAME, REGMAIL, REGPWD FROM t_register WHERE REGMAIL = :REGMAIL');
			$login->bindValue(':REGMAIL', $mail_address);
			$login->execute();
			
			return $login;
		}
	}
